<?php

namespace App\Libraries;

use App\Models\TempFile;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\CartItemOption;
use App\Models\CartItemFile;
use App\Models\CartItemDesignInfo;

use App\Models\Card;
use App\Models\CardDiscount;
use App\Models\CardQuantity;
use App\Models\CardFeature;
use App\Models\CardOption;
use App\Models\CardPrice;
use App\Models\CardTemplate;   
use App\Models\DesignPackage;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderItemOption;
use App\Models\OrderItemFile;
use App\Models\OrderItemDesignInfo;

use App\Models\TaxZone;
use App\Models\Coupon;
use App\Models\LogoSample;

use App\Models\Setting;

use CustomerAuth, Session, Input;

class MyCart
{
    public static $auth = null;
    public static $current_customer = null;
    
    public function __construct()
    {
    }
    
    public static function setCurrency($currency = 'USD', $force = false)
    {
        $currency = $currency == 'CAD' ? $currency : 'USD';
        if(!Session::has('currency') || $force == true)
        {
            Session::set('currency', $currency);
            Session::save();
        }
    }
    
    /**
    * get currency currency
    *  
    */
    public static function getCurrency()
    {
        return Session::has('currency') ? Session::get('currency') : 'USD';
    }
    
    /**
    * return CAD if shipping address is in canada
    * 
    */
    public static function getCurrencyFromAddress()
    {
        if(self::isCanadaShippingAddress())
        {
            return 'CAD';
        }
        
        return self::getCurrency();
    }
    
    /**
    * check if shipping address is in canada
    * 
    */
    public static function isCanadaShippingAddress()
    {
        $shippingAddress = self::getShippingAddress();
        if($shippingAddress)
        {
            $country = $shippingAddress['country_code'];
            if($country == 'CA') return true;
        }
        
        return false;
    }
    
    //////////////////////////////////////////////////////////////////////
    //Common
    //////////////////////////////////////////////////////////////////////
    public static function hasCartId()
    {
        return Session::has('cart_id');
    }
    
    public static function getCartId()
    {
        return Session::get('cart_id');
    }
    
    public static function setCartId($cartId)
    {
        Session::set('cart_id', $cartId);
        Session::save();
    }
    
    public static function clearCart()
    {
        Session::forget('cart_id');
        Session::forget('order_info');        
        Session::forget('coupon');        
        Session::save();
    }
    
    public static function init() 
    {
        self::$auth = new CustomerAuth;
        self::$current_customer = self::$auth->customer();
        //self::setCurrency('USD');
    }
    
    public static function get($create = false, $check = false)
    {
        //init auth and customer
        self::init();
        
        $cart = null;
        if(self::hasCartId())
        {
            $cart = Cart::find(self::getCartId());
        }
        else
        {            
            if(self::$auth->isLoggedIn())
            {
                $cart = Cart::where('customer_id', self::$current_customer->id)->first();
            }
            else
            {
                $cart = Cart::where('session_key', Session::getId())->first();    
            }
        }
        
        if(isset($cart->id))
        {
            self::setCartId($cart->id);
        }
        else
        {
            $cart = new Cart;
            
            //create new cart row for customer
            if($create == true)
            {
                $cart->customer_id = self::$auth->isLoggedIn() ? self::$current_customer->id : 0;
                $cart->session_key = self::$auth->isLoggedIn() ? '' : Session::getId();
                $cart->save(); 
                
                self::setCartId($cart->id);
            }
        }
        
        if($check == true)
        {
            self::checkItems();
        }
        
        return $cart;
    }
    
    public static function getFinal()
    {
        $cart = self::get();
        
        //calculate tax
        /*if(self::isCanadaShippingAddress())
        {
            $totalPrintPrice = 0;
            $totalDesignPrice = 0;
            $designTaxRate = 5; //percent
            foreach($cart->items as $item)
            {
                if($item->product_type == PRODUCT_DESIGN) $totalDesignPrice += $item->item_price;
                else $totalPrintPrice += $item->item_price;
            }
            $cart->taxPrice = number_format($totalPrintPrice * self::getTaxRate() + $totalDesignPrice * $designTaxRate / 100, 2);         
        }*/
        
        //check shipping is required, then set shipping and tax
        if($cart->isShippingRequired())
        {
            $cart->shippingPrice = self::getShippingPrice();  
        }
        
        //calculate tax
        if(self::isCanadaShippingAddress())
        {
            $totalPrintPrice = 0;
            $totalDesignPrice = 0;
            $designTaxRate = 5; //percent
            foreach($cart->items as $item)
            {
                if($item->product_type == PRODUCT_DESIGN) $totalDesignPrice += $item->item_price;
                else $totalPrintPrice += $item->item_price;
            }
            $cart->taxPrice = number_format(($totalPrintPrice + $cart->shippingPrice) * self::getTaxRate() + $totalDesignPrice * $designTaxRate / 100, 2);         
        }
        
        //apply coupon code
        $coupon = self::getCoupon();
        if($coupon != false)
        {
            $cart->hasCoupon = true;
            $cart->couponDiscountPercent = $coupon['percent'];
        }
        
        return $cart;
    }
    
    public static function format()
    {
        self::removeSavedItem();
              
        Session::forget('added_item_id');
        Session::forget('order_info');
        Session::forget('fedex_rates');
        Session::save();
    }
    
    public static function checkItems()
    {
        $cart = self::get();
        
        foreach($cart->items as $item)
        {
            $row = null;
            if($item->product_type == PRODUCT_CARD) {
                $row = Card::find($item->product_id);
            } else if($item->product_type == PRODUCT_TEMPLATE) {
                $row = CardTemplate::find($item->product_id);
            } else if($item->product_type == PRODUCT_DESIGN) {
                $row = DesignPackage::find($item->product_id);
            }
            
            if(!isset($row->id)) CartItem::destroy($item->id);
        }
    }
    
    public static function savePayload()
    {
        $currencyRate = 1;
        if(self::getCurrencyFromAddress() == 'CAD') $currencyRate = Setting::getCurrencyRate();
        
        $info = self::getOrderInfo();
        
        //add customer info
        $customer = self::$auth->customer();
        $info['customer'] = array(
            'id' => $customer->id,
            'name' => $customer->full_name(),
            'email' => $customer->email,
        );
        
        $cart = self::get();
        $cart->payload = serialize($info);
        $cart->currency_rate = $currencyRate;
        $cart->save();
        
        return $cart;
    }
    
    public static function loadPayload()
    {
        $cart = self::get();
        Session::set('order_info', unserialize($cart->payload));
        Session::save();
        
        return $cart;
    }
    //////////////////////////////////////////////////////////////////////
    //Order
    //////////////////////////////////////////////////////////////////////
    public static function saveCoupon($coupon) 
    {
        Session::set('coupon', $coupon);
        Session::save();
    }
    
    public static function getCoupon()
    {
        if(!Session::has('coupon'))
        {
            return false;
        }
        
        return Session::get('coupon');
    }
    
    public static function removeCoupon()
    {
        Session::forget('coupon');
        Session::save();
    }
    
    public static function saveShippingAddress($address)
    {
        $orderInfo = self::getOrderInfo();
        $orderInfo['shippingAddress'] = $address;
        
        self::saveOrderInfo($orderInfo);
    }
    
    public static function getShippingAddress()
    {
        if(!self::hasOrderInfo())
        {
            return false;
        }
        
        $orderInfo = self::getOrderInfo();
        return isset($orderInfo['shippingAddress']) ? $orderInfo['shippingAddress'] : false;
    }
    
    public static function saveBillingAddress($address)
    {
        $orderInfo = self::getOrderInfo();
        $orderInfo['billingAddress'] = $address;
        
        self::saveOrderInfo($orderInfo);
    }
    
    public static function getBillingAddress()
    {
        if(!self::hasOrderInfo())
        {
            return false;
        }
        
        $orderInfo = self::getOrderInfo();
        return isset($orderInfo['billingAddress']) ? $orderInfo['billingAddress'] : false;
    }
    
    public static function saveShippingMethod($method)
    {
        $orderInfo = self::getOrderInfo();
        $orderInfo['shippingMethod'] = $method;
        
        self::saveOrderInfo($orderInfo);
    }
    
    public static function getShippingMethod()
    {
        $orderInfo = self::getOrderInfo();
        $shippingMethod = isset($orderInfo['shippingMethod']) ? $orderInfo['shippingMethod'] : false;
        
        return $shippingMethod;
    }
    
    public static function getShippingPrice()
    {
        $method = self::getShippingMethod();
        return isset($method->amount) ? $method->amount : 0;
    }
    
    public static function savePaymentMethod($method)
    {
        $orderInfo = self::getOrderInfo();
        $orderInfo['paymentMethod']     = $method;

        self::saveOrderInfo($orderInfo);
    }
    
    public static function getPaymentMethod()
    {
        $orderInfo = self::getOrderInfo();
        $paymentMethod = isset($orderInfo['paymentMethod']) ? $orderInfo['paymentMethod'] : false;
        
        return $paymentMethod;    
    }
    
    public static function getPaymentMethodCode()
    {
        $orderInfo = self::getOrderInfo();
        $method = isset($orderInfo['paymentMethod']) ? $orderInfo['paymentMethod'] : false;
        
        if($method == false)
        {
            return false;
        }
        
        return $method->code;
    }
    
    public static function getTaxRate()
    {
        $shippingAddress = self::getShippingAddress();
        if($shippingAddress)
        {
            return TaxZone::getTaxRate($shippingAddress['country'], $shippingAddress['state']) / 100;    
        }
        
        return 0;
    }
    
    public static function placeOrder($currency, $transactionId='', $payerId='', $orderStatus=ORDER_PENDING)
    {
        //init auth and customer
        self::init();
        
        if(!self::checkOrderInfo())
        {
            return false;
        }
        
        //get order info
        $orderInfo = self::getOrderInfo();
        
        $billingAddress  = $orderInfo['billingAddress'];
        $shippingAddress = $orderInfo['shippingAddress'];        
        $paymentMethod   = $orderInfo['paymentMethod'];   
        
        //get cart
        $cart = MyCart::getFinal();
        
        //create new order 
        $order = new Order;
        $order->number = Order::newNumber();
        
        $order->billing_name    = $billingAddress['first_name'] . ' ' . $billingAddress['last_name'];
        //$order->billing_email   = $billingAddress['email'];
        $order->billing_address = $billingAddress['address'];
        $order->billing_city    = $billingAddress['city'];
        $order->billing_country = $billingAddress['country_name'];
        $order->billing_state   = $billingAddress['state_name'];
        $order->billing_zipcode = $billingAddress['zipcode'];
        $order->billing_phone   = $billingAddress['phone'];
        
        $order->shipping_name    = $shippingAddress['first_name'] . ' ' . $shippingAddress['last_name'];
        //$order->shipping_email   = $shippingAddress['email'];
        $order->shipping_address = $shippingAddress['address'];
        $order->shipping_city    = $shippingAddress['city'];
        $order->shipping_country = $shippingAddress['country_name'];
        $order->shipping_state   = $shippingAddress['state_name'];
        $order->shipping_zipcode = $shippingAddress['zipcode'];
        $order->shipping_phone   = $shippingAddress['phone'];
        $order->shipping_note    = $shippingAddress['note'];
        
        $order->currency         = $currency;
        $order->currency_rate    = $cart->currency_rate;
        $order->sub_total_price  = $cart->subTotalPrice() * $cart->currency_rate;
        
        $order->transaction_id  = $transactionId;
        $order->payer_id        = $payerId;
        $order->status          = $orderStatus;
            
        $cart = self::getFinal();
        
        //calculate shipping
        if($cart->isShippingRequired() == true)
        {
            $shippingMethod  = $orderInfo['shippingMethod'];
        
            $order->shipping_method = $shippingMethod->serviceType;
            $order->shipping_price  = $shippingMethod->amount * $cart->currency_rate;
        }
        else
        {
            $order->shipping_price  = 0;
        }
        
        //calculate tax
        $order->tax_price       = $cart->taxPrice * $cart->currency_rate;
         
        $order->discount_price  = $cart->discountPrice();
        $order->total_price     = $order->sub_total_price + $order->shipping_price + $order->tax_price - $order->discount_price;
        $order->payment_method  = self::getPaymentMethodCode();
        
        if(self::$auth->isLoggedIn())
        {
            $order->customer_id     = self::$current_customer->id;
            $order->customer_name   = self::$current_customer->full_name();
            $order->customer_email  = self::$current_customer->email;
        }
        else
        {
            $customerInfo = $orderInfo['customer'];
            
            $order->customer_id     = $customerInfo['id'];
            $order->customer_name   = $customerInfo['name'];
            $order->customer_email  = $customerInfo['email'];    
        }
        
        $orderSaved = $order->save();         
        if($orderSaved)
        {
            //save items
            foreach($cart->items as $item)
            {
                $orderItem = new OrderItem;
                $orderItem->order_id    = $order->id;
                $orderItem->product_type= $item->product_type;
                $orderItem->product_id  = $item->product_id;
                $orderItem->name        = $item->product_name;
                $orderItem->description = $item->product_description;
                $orderItem->turnaround_time = $item->product_turnaround_time;
                $orderItem->image       = $item->product_image;
                $orderItem->unit_price  = $item->unit_price;
                $orderItem->qty         = $item->product_quantity;
                $orderItem->sets        = $item->sets;
                $orderItem->price       = $item->item_price * $cart->currency_rate;
                $orderItem->discount_percent= $item->discount_percent;
                $orderItem->custom_sets = $item->custom_sets;
                $orderItem->template_uid    = $item->template_uid;
                $orderItem->template_front  = $item->template_front;
                $orderItem->template_back   = $item->template_back;
                $orderItem->reference_order_id = $item->reference_order_id;
                $orderItem->job_number      = OrderItem::newJobNumber(); 
                $orderItem->job_updated     = $order->created_at;
                $itemSaved = $orderItem->save();
                
                $orderItem->increasePurchase();
                
                if($itemSaved)
                {
                    //save item options
                    foreach($item->options as $option)
                    {
                        $orderItemOption = new OrderItemOption;
                        $orderItemOption->order_id  = $order->id;
                        $orderItemOption->item_id   = $orderItem->id;
                        $orderItemOption->feature_id= $option->feature_id;
                        $orderItemOption->feature_name  = $option->feature_name;
                        $orderItemOption->feature_type  = $option->feature_type;
                        $orderItemOption->feature_sort  = $option->feature_sort;
                        $orderItemOption->side_type     = $option->side_type;
                        $orderItemOption->option_id     = $option->option_id;
                        $orderItemOption->option_name   = $option->option_name;
                        $orderItemOption->option_sort   = $option->option_sort;
                        $orderItemOption->option_price  = $option->option_price * $cart->currency_rate;
                        $orderItemOption->save();
                    }
                    
                    //save item files
                    foreach($item->files as $file)
                    {
                        $orderItemFile = new OrderItemFile;
                        $orderItemFile->order_id = $order->id;
                        $orderItemFile->item_id  = $orderItem->id;
                        $orderItemFile->name     = $file->name;
                        $orderItemFile->path     = $file->path;
                        $orderItemFile->size     = $file->size;
                        $orderItemFile->target   = $file->target;
                        $orderItemFile->created_at = $file->created_at;
                        $orderItemFile->save();
                    }
                    
                    //save design info if exist
                    if($designInfo = $item->designInfo())
                    {
                        $orderDesignInfo = new OrderItemDesignInfo;
                        $orderDesignInfo->order_id      = $order->id;
                        $orderDesignInfo->item_id       = $orderItem->id;
                        $orderDesignInfo->logo_require  = $designInfo->logo_require;
                        $orderDesignInfo->logo_email    = $designInfo->logo_email;
                        $orderDesignInfo->logo_business = $designInfo->logo_business;
                        $orderDesignInfo->logo_industry = $designInfo->logo_industry;
                        $orderDesignInfo->logo_audience = $designInfo->logo_audience;
                        $orderDesignInfo->logo_samples  = $designInfo->logo_samples;
                        $orderDesignInfo->card_email    = $designInfo->card_email;
                        $orderDesignInfo->card_business = $designInfo->card_business;
                        $orderDesignInfo->card_information = $designInfo->card_information;
                        $orderDesignInfo->card_type_id  = $designInfo->card_type_id;
                        $orderDesignInfo->card_type_name= $designInfo->card_type_name;
                        $orderDesignInfo->save();
                    }
                }
            }
        }
        
        //if coupon is applied, then increase coupou's used_time
        $coupon = self::getCoupon();
        if($coupon != false)
        {
            $couponRow = Coupon::find($coupon['id']);
            if(isset($couponRow->id)) 
            {
                $couponRow->used_time++;
                $couponRow->save();
            }
        }
        
        //remove current cart
        Cart::destroy($cart->id);
        
        //remove saved info in session
        self::format();
        self::clearCart();
        
        self::setCompleted($order->id);
        
        return true;
    }  
    
    public static function isCompleted($clear=false)
    {
        if(Session::has('order_completed'))
        {
            if($clear == true)
            {
                Session::forget('order_completed');
                Session::forget('order_completed_id');
                Session::save();
            }
            
            return true;
        }
        
        return false;
    }
    
    public static function setCompleted($completeOrderId)
    {
        self::removeSavedItem();
        
        Session::set('order_completed', 1);
        Session::set('order_completed_id', $completeOrderId);
        Session::save();
    }
    
    public static function getCompletedOrderId()
    {
        return Session::get('order_completed_id');
    }
    
    public static function saveOrderInfo($data)
    {
        Session::set('order_info', $data);
        Session::save();
    }
    
    public static function hasOrderInfo()
    {
        return Session::has('order_info');
    }
    
    public static function getOrderInfo()
    {
        return Session::get('order_info');
    }
    
    public static function checkOrderInfo()
    {
        if(!self::hasOrderInfo())
        {
            return false;
        }
        
        $orderInfo = self::getOrderInfo();
        $cart = self::get();
        if($cart->isShippingRequired())
        {
            if(!isset($orderInfo['shippingAddress'])
                || !isset($orderInfo['billingAddress'])
                || !isset($orderInfo['shippingMethod'])
                || !isset($orderInfo['paymentMethod']))
            {   
                return false;
            }
        }
        else
        {
            $billingAddress = self::getShippingAddress();
            self::saveBillingAddress($billingAddress);
            
            if(!isset($orderInfo['shippingAddress'])
                || !isset($orderInfo['paymentMethod']))
            {   
                return false;
            }
        }
        
        return true;
    }
    
    //////////////////////////////////////////////////////////////////////
    // Add Items
    //////////////////////////////////////////////////////////////////////
    
    public static function saveCard($data)
    {
        Session::set('saved_card', $data);
        Session::set('uploading_key', str_random(20));
        Session::save();    
    }
    
    public static function hasSavedCard()
    {
        if(!Session::has('saved_card')) return false;
        
        $saved = Session::get('saved_card'); 
        if(is_array($saved) 
            && isset($saved['product_id']) 
            && isset($saved['quantity'])
            && isset($saved['product_options']))
        {
            return $saved;
        }
        
        return false;
    }
    
    public static function addCardItem($productId, $discountId, $quantityId, $options, $referenceOrdeId=0)
    {
        if(!is_array($options)) return false;
        
        $sets = 1;
        $discountPercent = 0;
        $basePrice = 0;
        $totalQuantity = 0;
        $optionRows = getCardOptionRows($productId, $options, $quantityId);
        $customSets = array();
        $percent = 0;
        
        //check product
        $product = Card::find($productId);
        if(!isset($product->id))
        {
            return false;
        }
        
        if(!is_array($quantityId)) //normal set
        {
            //check discount row
            if($discountId != 0)
            {
                $discountRow = CardDiscount::find($discountId);
                if(!isset($discountRow->id) || $discountRow->card_id != $productId)
                {
                    return false;
                } 
                
                $sets           = $discountRow->sets;   
                $discountPercent= min($discountRow->percent, 100);
            }
            
            //check quantity row
            $quantityRow = CardQuantity::find($quantityId);
            if(!isset($quantityRow->id) || $quantityRow->card_id != $productId)
            {
                return false;
            } 
            
            //get base price and percent
            foreach($optionRows as $optRow)
            {
                if($optRow->price_type == PRICE_FIXED)
                    $basePrice += CardPrice::price($productId, $quantityId, $optRow->feature_id, $optRow->id);    
                else
                    $percent += CardPrice::price($productId, $quantityId, $optRow->feature_id, $optRow->id);
            }
            
            $totalQuantity = $sets * $quantityRow->number;
            
            //recalculate basePrice for percent options    
            $basePrice = $sets * $basePrice;
            $basePrice += $basePrice * $percent / 100;
        }
        else //custom sets
        {
            $sets = 0;
            foreach($quantityId as $row) 
            {
                $itemBasePrice = 0; 
                $percent = 0;
                $quantityRow = CardQuantity::find($row['quantity']);
                if(!isset($quantityRow->id) || $quantityRow->card_id != $productId)
                {
                    return false;
                } 
            
                //get base price
                foreach($optionRows as $optRow)
                {
                    if($optRow->price_type == PRICE_FIXED)
                        $itemBasePrice += CardPrice::price($productId, $row['quantity'], $optRow->feature_id, $optRow->id);    
                    else
                        $percent += CardPrice::price($productId, $row['quantity'], $optRow->feature_id, $optRow->id);
                }
            
                $customSets[] = array('name' => $row['name'], 'quantity' => $quantityRow->number);
                $sets++;   
                $totalQuantity += $quantityRow->number; 
                
                //recalculate basePrice for percent options    
                $itemBasePrice += $itemBasePrice * $percent / 100;
                $basePrice += $itemBasePrice;
            }

            $discountPercent = CardDiscount::getSetDiscount($productId, $sets);
        }
        
        //get max discount percent
        $discountPercent = max($discountPercent, $product->getPromotionDiscount());      

        //get cart
        $cart = MyCart::get(true);
        
        //add item
        $item = new CartItem;
        $item->cart_id      = $cart->id;
        $item->product_type = PRODUCT_CARD;
        $item->product_id   = $productId;
        $item->product_name = $product->name;
        //$item->product_description = $product->description;
        $item->product_turnaround_time = $product->turnaround_time;
        $item->product_image= $product->image();
        $item->product_quantity = $totalQuantity;
        $item->sets         = $sets;
        $item->item_price   = $basePrice * (100 - $discountPercent) / 100;
        $item->unit_price   = $item->item_price / $item->product_quantity;
        $item->discount_percent = $discountPercent;
        $item->weight       = $product->weight * $item->product_quantity;
        $item->custom_sets  = is_array($customSets) ? serialize($customSets) : null;
        $item->reference_order_id = $referenceOrdeId;
        $item->save();
        
        //add options
        foreach($optionRows as $row)
        {
            $optItem = new CartItemOption;
            $optItem->cart_id   = $cart->id;
            $optItem->item_id   = $item->id;
            $optItem->feature_id    = $row->feature->id;
            $optItem->feature_name  = $row->feature->name;
            $optItem->feature_type  = $row->feature->type;
            $optItem->feature_sort  = $row->feature->sort;
            $optItem->side_type     = $row->side;
            $optItem->option_id     = $row->id;
            $optItem->option_name   = $row->name;
            $optItem->option_sort   = $row->sort;
            $optItem->option_price  = $row->price;
            $optItem->save();
        } 
        
        //add files
        self::_addFiles($cart->id, $item->id);       
        
        //save added item id to session
        self::_saveAddedItemId($item->id);
        
        return true;
    } 
    
    public static function saveTemplate($data)
    {
        Session::set('saved_template', $data);
        Session::set('uploading_key', str_random(20));
        Session::save();    
    }
    
    public static function hasSavedTemplate()
    {
        if(!Session::has('saved_template')) return false;
            
        //get saved info from session
        $saved = Session::get('saved_template'); 
        if(is_array($saved) 
            && isset($saved['product_id']) 
            && isset($saved['quantity']))
        {
            return $saved;
        }
        
        return false;
    }  
      
    public static function addTemplateItem($productId, $discountId, $quantityId, $referenceOrdeId=0)
    {
        $sets = 1;
        $discountPercent = 0;
        $basePrice = 0;
        $totalQuantity = 0;
        $customSets = array();    
        
        //check product
        $template = CardTemplate::find($productId);
        $product = $template->card;
        if(!isset($product->id))
        {
            return false;
        }
        
        if(!is_array($quantityId)) //normal set
        {
            //check discount row
            if($discountId != 0)
            {
                $discountRow = CardDiscount::find($discountId);
                if(!isset($discountRow->id) || $discountRow->card_id != $product->id)
                {
                    return false;
                } 
                
                $sets           = $discountRow->sets;   
                $discountPercent= min($discountRow->percent, 100);
            }
            
            //check quantity row
            $quantityRow = CardQuantity::find($quantityId);
            if(!isset($quantityRow->id) || $quantityRow->card_id != $product->id)
            {
                return false;
            } 
            
            //check options
            $basePrice = $sets * $template->basePrice($quantityId); 
            $totalQuantity = $sets * $quantityRow->number;
        }
        else //custom sets
        {
            $sets = 0;
            
            foreach($quantityId as $row) 
            {
                $quantityRow = CardQuantity::find($row['quantity']);
                if(!isset($quantityRow->id) || $quantityRow->card_id != $product->id)
                {
                    return false;
                } 
            
                //get base price
                $basePrice += $template->basePrice($row['quantity']); 
            
                $customSets[] = array('name' => $row['name'], 'quantity' => $quantityRow->number);
                $sets++;   
                $totalQuantity += $quantityRow->number; 
            }
            
            $discountPercent = CardDiscount::getSetDiscount($product->id, $sets);  
        }  
        
        //get max discount percent
        $discountPercent = max($discountPercent, $template->getPromotionDiscount());     

        //get cart
        $cart = MyCart::get(true);
        
        //add item
        $item = new CartItem;
        $item->cart_id      = $cart->id;
        $item->product_type = PRODUCT_TEMPLATE;
        $item->product_id   = $productId;
        $item->product_name = $template->name;
        //$item->product_description = $template->description;
        $item->product_turnaround_time = $product->turnaround_time;
        $item->product_image= $template->image();
        $item->product_quantity = $totalQuantity;
        $item->sets         = $sets;
        $item->item_price   = $basePrice * (100 - $discountPercent) / 100;
        $item->unit_price   = $item->item_price / $item->product_quantity;
        $item->discount_percent = $discountPercent;
        $item->weight       = $product->weight * $item->product_quantity;
        $item->custom_sets  = is_array($customSets) ? serialize($customSets) : null;
        $item->template_uid     = $template->template_uid;
        $item->template_front   = Input::get('frontside-content');
        $item->template_back    = Input::get('backside-content');
        $item->reference_order_id = $referenceOrdeId;
        $item->save();
        
        //add all card features 
        //if template doesn't have feature, then add 'No Need' option
        foreach($template->card->featuresSorted() as $ft)
        {
            $optionRows = $template->featureOptions($ft->id);
            if($optionRows->isEmpty())
            {
                //add 'No Need' option
                /*$optItem = new CartItemOption;
                $optItem->cart_id   = $cart->id;
                $optItem->item_id   = $item->id;
                $optItem->feature_id    = $ft->id;
                $optItem->feature_name  = $ft->name;
                $optItem->feature_type  = $ft->type;
                $optItem->feature_sort  = $ft->sort;
                $optItem->side_type     = 0;
                $optItem->option_id     = 0;
                $optItem->option_name   = 'No Need';
                $optItem->option_sort   = 0;
                $optItem->option_price  = 0;
                $optItem->save();*/    
            }
            else
            {
                //add all template's options
                foreach($optionRows as $row)
                {
                    $optItem = new CartItemOption;
                    $optItem->cart_id   = $cart->id;
                    $optItem->item_id   = $item->id;
                    $optItem->feature_id    = $ft->id;
                    $optItem->feature_name  = $ft->name;
                    $optItem->feature_type  = $ft->type;
                    $optItem->feature_sort  = $ft->sort;
                    $optItem->side_type     = $row->side_type;
                    $optItem->option_id     = $row->id;
                    $optItem->option_name   = $row->name;
                    $optItem->option_sort   = $row->sort;
                    $optItem->option_price  = CardPrice::price($product->id, $quantityId, $ft->id, $row->id);
                    $optItem->save();
                }
            }
        }        
        
        //add files
        self::_addFiles($cart->id, $item->id);
        
        //save added item id to session
        self::_saveAddedItemId($item->id);
        
        return true;
    }
   
    public static function saveDesign($data)
    {
        Session::set('saved_design', $data);
        Session::set('uploading_key', str_random(20));
        Session::save();    
    }
    
    public static function hasSavedDesign()
    {
        if(!Session::has('saved_design')) return false;
            
        //get saved info from session
        $saved = Session::get('saved_design'); 
        if(is_array($saved) && isset($saved['design-package']))
        {
            return $saved;
        }
        
        return false;
    }  
     
    public static function addDesign($productId, $referenceOrdeId=0)
    {
        $product = DesignPackage::find($productId);
        if(!isset($product->id))
        {
            return false;
        }
        
        //get cart
        $cart = MyCart::get(true);
        
        //add item
        $item = new CartItem;
        $item->cart_id      = $cart->id;
        $item->product_type = PRODUCT_DESIGN;
        $item->product_id   = $productId;
        $item->product_name = $product->name;
        $item->product_description = $product->description;
        $item->product_image= $product->image;
        $item->product_quantity = 1;
        $item->sets         = 1;
        $item->unit_price   = $product->price;
        $item->item_price   = $product->price;
        $item->discount_percent = 0;
        $item->reference_order_id = $referenceOrdeId;
        $item->save();     
        
        //add design info   
        self::_addDesignInfo($cart->id, $item->id, $product->design->require_logo_design);
        
        //add files
        self::_addFiles($cart->id, $item->id);
        
        //save added item id to session
        self::_saveAddedItemId($item->id);
         
        return true;
    }
    
    //////////////////////////////////////////////////////////////////////
    // Accessory Functions
    //////////////////////////////////////////////////////////////////////
    
    public static function getAddedItemId()
    {
        return Session::get('added_item_id');
    }
    
    public static function removeSavedItem()
    {
        Session::forget('saved_card');
        Session::forget('saved_template');
        Session::forget('saved_design');
        Session::forget('uploading_key');
        
        Session::save();
    }
    
    public static function getUploadingKey()
    {
        return Session::get('uploading_key');
    }
    
    //////////////////////////////////////////////////////////////////////
    // Private
    //////////////////////////////////////////////////////////////////////
    
    private static function _saveAddedItemId($itemId)
    {
        Session::set('added_item_id', $itemId);
        Session::save();
    }
    
    private static function _addFiles($cartId, $itemId)
    {
        if($uploadingKey = self::getUploadingKey())
        {                    
            $tFiles = TempFile::where('key', $uploadingKey)->get();
            
            foreach($tFiles as $tf)
            {
                $row = new CartItemFile;
                $row->cart_id = $cartId;
                $row->item_id = $itemId;
                $row->name = $tf->name;
                $row->path = $tf->path;
                $row->size = $tf->size;
                $row->target = $tf->target;
                $row->save();    
            } 
            
            TempFile::where('key', $uploadingKey)->delete();
            
            return true;
        }
        
        return false;
    }
    
    private static function _addDesignInfo($cartId, $itemId, $requireLogoDesign)
    {
        $designInfo = new CartItemDesignInfo;
        $designInfo->cart_id = $cartId;
        $designInfo->item_id = $itemId;
        $designInfo->card_email     = Input::get('card-brief-email');
        $designInfo->card_business  = Input::get('card-brief-business-name');
        $designInfo->card_information = Input::get('card-brief-info-area');
        
        //card type
        $cardRow = Card::find(Input::get('card-brief-card-type'));
        if(isset($cardRow->id))
        {
            $designInfo->card_type_id   = $cardRow->id;
            $designInfo->card_type_name = $cardRow->name;
        }
        
        if($requireLogoDesign == YES)
        {
            $designInfo->logo_require   = YES;
            $designInfo->logo_email     = Input::get('logo-brief-email');
            $designInfo->logo_business  = Input::get('logo-brief-business-name');
            $designInfo->logo_industry  = Input::get('logo-brief-business-industry');
            $designInfo->logo_audience  = Input::get('logo-brief-business-audience');
            
            //logo samples
            $logoSamples = array();
            $selectedLogoSamples = Input::get('logosamples');
            if(is_array($selectedLogoSamples)) {
                foreach($selectedLogoSamples as $r) {
                    $row = LogoSample::find($r);
                    
                    if(isset($row->id)) $logoSamples[] = $row->image;
                }
            }
            
            $designInfo->logo_samples = json_encode($logoSamples);
        }
        $designInfo->save();
    }
}

/**
* get CardOptionRows from inputed options from product page
* 
* @param mixed $productId
* @param mixed $options
* @return []
*/
function getCardOptionRows($productId, $options, $quantityId)
{
    $optionRows = array();
    
    foreach($options as $ftId => $optId)
    {        
        if(!is_array($optId))
        {
            $optionRow = CardOption::find($optId);
            if(!isset($optionRow->id) || $optionRow->card_id != $productId) continue;
            
            $optionRow->side = '';
            $optionRow->price = CardPrice::price($productId, $quantityId, $ftId, $optId);
            $optionRows[] = $optionRow;
        }
        else
        {
            foreach($optId as $side => $lists)
            {
                if(($side != FRONTSIDE && $side != BACKSIDE && $side != BOTHSIDE) || !is_array($lists)) continue;
                
                foreach($lists as $li)
                {
                    $optionRow = CardOption::find($li);
                    if(!isset($optionRow->id) || $optionRow->card_id != $productId) continue;
                                                   
                    $optionRow->side = $side;
                    $optionRow->price = CardPrice::price($productId, $quantityId, $ftId, $li);
                    $optionRows[] = $optionRow;
                }
            }
        }
    }
    
    return $optionRows;
}

function getCardPrice($productId, $quantityId, $optionRows)
{
    $price = 0;
    foreach($optionRows as $row)
    {
        $price += CardPrice::price($productId, $quantityId, $row->feature_id, $row->id);    
    }
    
    return $price;
}