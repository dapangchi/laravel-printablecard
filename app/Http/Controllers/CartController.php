<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Libraries\FedexShipping;
use App\Libraries\MyCart;
use App\Libraries\CardValidation;   

use App\Models\Customer;
use App\Models\Country;
use App\Models\Region;
use App\Models\Coupon;
use App\Models\CustomerBillingAddress;
use App\Models\CustomerShippingAddress;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\CartItemOption;
use App\Models\Card;
use App\Models\CardDiscount;
use App\Models\CardQuantity;
use App\Models\CardOption;
use App\Models\CardPrice;
use App\Models\CardTemplate;
use App\Models\DesignPackage;

use App\Models\Order;      

use Input, Session, Redirect, Validator, Response, Mail;
use Omnipay;

class CartController extends FrontController {
    
    public function __construct()
    {
        parent::__construct();  
        
        $this->data['likeItems'] = Card::orderByRaw("RAND()")
            ->limit(3)
            ->get();  
           
        //get countries && regions
        $this->data['countries'] = Country::where('active', STATUS_ACTIVE)
            ->orderBy('sort', 'asc')
            ->orderBy('name', 'asc')
            ->lists('name', 'id')
            ->toArray();     
        $this->data['regions'] = array();
    }
    
    public function index()
    {
        $this->page_class = 'shopping-cart-page';
        $this->page_title = 'My Shopping Cart';
        return $this->view('cart.index');       
    }
    
    public function added()
    {
        $itemId = MyCart::getAddedItemId();
        if(!$itemId)
        {
            return Redirect::route('cart.item.list');
        }
        
        $item = CartItem::find($itemId);
        if(!isset($item->id))
        {
            return Redirect::route('cart.item.list');
        }
        
        $this->page_class = 'added-cart-page';
        $this->page_title = 'Added to Cart';
        return $this->view('cart.added', compact('item'));         
    }
    
    public function remove($id)
    {
        $cart = MyCart::get();
        if($cart->items->isEmpty())
        {
            return Redirect::route('cart.item.list');
        }
        
        $item = CartItem::find($id);
        if(!isset($item->id))
        {
            Template::set_message(trans('msg.has_error'), 'danger');   
            return redirect('/');
        }        
        else
        {
            Template::set_message("$item->product_name has been removed from your cart.", 'success');
            
            CartItem::destroy($id);
        }    
        
        return Redirect::route('cart.item.list');
    }
    
    public function checkout()
    {
        if($this->auth->isLoggedIn() === false)
        {
            Template::set_message('You must login to proceed checkout.', 'danger');
            
            $this->auth->setCheckoutFlag();
            
            return Redirect::route('customer.login');
        }
        
        MyCart::format();
        
        $cart = MyCart::get();
        if($cart->items->isEmpty())
        {
            return Redirect::route('cart.item.list');
        }
        
        $customer = null;
        if($this->auth->isLoggedIn())
        {
            $customer = $this->current_customer;
        }
        else
        {
            $customer = new Customer;
        }
        //end country & region
        
        //get shipping methods
        $shipping_methods = array();
        //end shipping methods
        
        $this->page_title = 'Checkout';                                                                  
        $this->page_class = 'checkout-page';
        
        if($cart->isShippingRequired())
            return $this->view('cart.checkout', compact('customer', 'shipping_methods'));    
        else
            return $this->view('cart.checkout_noshipping', compact('customer'));    
    }
    
    ////////////////////////////////////////////////////////////////
    // Post Methods
    ////////////////////////////////////////////////////////////////

    /**
     * add card to cart
     *
     * @return mixed
     */
    public function addCard()
    {
        if($saved = MyCart::hasSavedCard())
        {
            $productId  = $saved['product_id'];
            $discountId = isset($saved['discount']) ? $saved['discount'] : 0;
            $quantityId = $saved['quantity'];
            $options    = $saved['product_options'];
            $referenceOrderId = $saved['reference_order_id'] > 0 ? $saved['reference_order_id'] : 0;
            if(MyCart::addCardItem($productId, $discountId, $quantityId, $options, $referenceOrderId))
            {
                MyCart::removeSavedItem();
                
                return Redirect::route('cart.item.add.success');
            }
            else
            {
                Template::set_message(trans('msg.has_error'), 'danger');    
            }
            
            MyCart::removeSavedItem();
        }
        
        return Redirect::route('cart.item.list');
    }

    /**
     * add template to cart
     *
     * @return mixed
     */
    public function addTemplate()
    {
        if($saved = MyCart::hasSavedTemplate())
        {
            $productId  = $saved['product_id'];
            $discountId = isset($saved['discount']) ? $saved['discount'] : 0;
            $quantityId = $saved['quantity'];
            $referenceOrderId = $saved['reference_order_id'] > 0 ? $saved['reference_order_id'] : 0;
            if(MyCart::addTemplateItem($productId, $discountId, $quantityId, $referenceOrderId))
            {
                MyCart::removeSavedItem();
                
                return Redirect::route('cart.item.add.success');
            }
            else
            {
                Template::set_message(trans('msg.has_error'), 'danger');    
            }
            
            MyCart::removeSavedItem();
        }
        
        return Redirect::route('cart.item.list');    
    }

    /**
     * add design to cart
     *
     * @return mixed
     */
    public function addDesign()
    {
        if($saved = MyCart::hasSavedDesign())
        {
            $referenceOrderId = $saved['reference_order_id'] > 0 ? $saved['reference_order_id'] : 0;
            $productId  = $saved['design-package'];
            $product = DesignPackage::find($productId);
            
            $rules = array();
            if($product->design->require_logo_design == YES)
            {
                //validate fields
                $rules = [
                    //'logosamples'               => 'required', 
                    'logo-brief-email'          => 'required|email',
                    'logo-brief-business-name'  => 'required',
                    'logo-brief-business-industry' => 'required',
                    'logo-brief-business-audience' => 'required',
                    'card-brief-email'          => 'required|email',
                    'card-brief-business-name'  => 'required',
                    'card-brief-info-area'      => 'required',
                    //'card-brief-card-type'      => 'required'
                ];
            }
            else
            {
                //validate fields
                $rules = [
                    'card-brief-email'          => 'required|email',
                    'card-brief-business-name'  => 'required',
                    'card-brief-info-area'      => 'required',
                    //'card-brief-card-type'      => 'required'
                ];
            }
            
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) 
            {
                Template::set_message(trans('msg.has_error'), 'danger');
                
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            
            if(MyCart::addDesign($productId, $referenceOrderId))
            {
                MyCart::removeSavedItem();
                
                return Redirect::route('cart.item.add.success');
            }
            else
            {
                Template::set_message(trans('msg.has_error'), 'danger');    
            }
            
            MyCart::removeSavedItem();
        }

        return Redirect::route('cart.item.list');     
    }

    public function complete()
    {
        //migrate cart info to order table
        /*if(!MyCart::isCompleted(true))
        {
            //Template::set_message(trans('msg.has_error'), 'danger');   
            //return Redirect::route('cart.checkout');
            return Redirect::to('/');
        }*/
        //end
        
        $this->page_title = 'Checkout Success';
        $this->page_class = 'sign-up-page';
        return $this->view('cart.complete');    
    }
    
    public function purchase()
    {
        if(!MyCart::checkOrderInfo())
        {
            Template::set_message(trans('msg.has_error'), 'danger');   
            return Redirect::route('cart.checkout');    
        }
        
        $cart = MyCart::getFinal();
        $currency = MyCart::getCurrencyFromAddress();    
        $discount = 0;
                    
        $payment = MyCart::getPaymentMethodCode();
        if($payment == PAYMENT_PAYPAL)
        {
            //items
            $items = array();
            foreach($cart->items as $row)
            {
                $items[] = array(
                    'name'  => $row->product_name,
                    'price' => format_currency($row->item_price, $currency)
                );
            }
            
            //shipping && tax
            if($cart->isShippingRequired())
            {
                $items[] = array('name' => 'Shipping', 'price' => format_currency($cart->shippingPrice, $currency));                
            }
            if($cart->taxPrice > 0)
            {
                $items[] = array('name' => 'Tax', 'price' => format_currency($cart->taxPrice, $currency));
            }
            
            //coupon discount
            if($cart->hasCoupon)
            {
                $discount = currency_convert($cart->discountPrice(), $currency);
            }
            
            //save payload to table for ipn
            MyCart::savePayload();
            
            //send params to paypal
            $params = [
                'return_url'    => route('cart.checkout.purchase.paypal'),
                'cancel_url'    => route('cart.checkout'),
                'notify_url'    => route('cart.checkout.paypal.ipn'),
                'custom'        => $cart->id,
                'items'         => $items,
                'discount'      => $discount
            ];
            $this->paypalForm($params);
        }
        else if($payment == PAYMENT_CREDIT)
        {
            $paymentMethod = MyCart::getPaymentMethod();
            $billingAddress= MyCart::getBillingAddress();
            $cardInfo = $paymentMethod->card;
            
            $totalPrice = 0;            
            $items = array();
            foreach($cart->items as $row)
            {
                $items[] = array(
                    'name'      => $row->product_name,
                    'quantity'  => 1,
                    'price'     => currency_convert($row->item_price, $currency)
                );
                
                $totalPrice += currency_convert($row->item_price, $currency);
            }
            
            //shipping && tax
            if($cart->isShippingRequired())
            {
                $items[] = array('name' => 'Shipping', 'quantity' => 1, 'price' => currency_convert($cart->shippingPrice, $currency));   
                
                $totalPrice += currency_convert($cart->shippingPrice, $currency);             
            }
            if($cart->taxPrice > 0)
            {
                $items[] = array('name' => 'Tax', 'quantity' => 1, 'price' => currency_convert($cart->taxPrice, $currency));
                
                $totalPrice += currency_convert($cart->taxPrice, $currency);             
            }  
            
            //coupon discount
            if($cart->hasCoupon)
            {
                $discount = currency_convert($cart->discountPrice(), $currency);
                $totalPrice -= $discount;
                
                $items[] = array('name' => 'Discount', 'quantity' => 1, 'price' => -$discount);   
            }
            
            //create card
            $card = Omnipay::creditCard([
                'number'        => $cardInfo['number'],
                'expiryMonth'   => $cardInfo['mon'],
                'expiryYear'    => $cardInfo['year'],
                'cvv'           => $cardInfo['cvv'],
                'firstName'     => $billingAddress['first_name'],
                'lastName'      => $billingAddress['last_name'],
                'billingAddress1'   => $billingAddress['address'],
                'billingCountry'    => $billingAddress['country_code'],
                'billingCity'       => $billingAddress['city'],
                'billingPostcode'   => $billingAddress['zipcode'],
                'billingState'      => $billingAddress['state_code'],
            ]);
            
            $params = array(
                'amount'    => $totalPrice,
                'currency'  => $currency,
                'card'      => $card,
                'description'=> 'Rockdesign Shopping Transaction'
            );
            
            Omnipay::setGateWay('paypalrest');
            $response = Omnipay::purchase($params)
                ->setItems($items)
                ->send();
            if ($response->isSuccessful())
            {
                $transactionId = $response->getTransactionReference();
                if(MyCart::placeOrder($currency, $transactionId, 'CreditCard - ' . str_replace(' ', '', $cardInfo['number']), ORDER_NEW))
                {
                    //send order confirmation email to customer
                    $this->_sendOrderConfirmationEmail(MyCart::getCompletedOrderId());
                    
                    return Redirect::route('cart.checkout.complete');   
                }
                else
                {
                    Template::set_message($response->getMessage(), 'danger');
                    return Redirect::route('cart.checkout');
                }
            }   
            else
            {
                Template::set_message($response->getMessage(), 'danger');
                return Redirect::route('cart.checkout');    
            }    
        }
        else
        {
            Template::set_message(trans('msg.has_error'), 'danger');   
            return Redirect::route('cart.checkout');    
        }
        
        exit;
    }
    
    public function purchaseCallbackPaypal()
    {
        //check cart is not empty
        $cart = MyCart::getFinal();
        if(isset($cart->id))
        {   
            $currency = MyCart::getCurrencyFromAddress();
            
            if(!MyCart::placeOrder($currency, '', ''))
            {
                Template::set_message(trans('msg.has_error'), 'danger');   
                return Redirect::route('cart.checkout');    
            }    
        }
        
        /*if(!MyCart::isCompleted())
        {
            Template::set_message(trans('msg.has_error'), 'danger');   
            return Redirect::route('cart.checkout');    
        } */
        
        return Redirect::route('cart.checkout.complete');   
    }
    
    public function paypalIPNListener()
    {
        //response template
        /*
        {
            "mc_gross": "12.00",
            "protection_eligibility": "Eligible",
            "address_status": "confirmed",
            "payer_id": "VR4PMRUP4QG7N",
            "tax": "0.00",
            "payment_date": "06:03:33 Feb 19, 2016 PST",
            "payment_status": "Completed",
            "mc_fee": "0.65",
            "notify_version": "3.8",
            "custom": "10/",
            "payer_status": "verified",
            "business": "dapangchi@gmail.com",
            "quantity": "1",
            "verify_sign": "A.7n6Acd75CB8FdbeZyRGF.BoVPlA5U2YgoES.Fyu.p5zNOHD8DFsEia",
            "payer_email": "topangchi@gmail.com",
            "txn_id": "65V2552477180371H",
            "payment_type": "instant",
            "last_name": "Lindfors",
            "receiver_email": "dapangchi@gmail.com",
            "payment_fee": "0.65",
            "receiver_id": "GQ9GUA2HR5T4Q",
            "txn_type": "web_accept",
            "item_name": "Test1",
            "mc_currency": "USD",
            "handling_amount": "0.00",
            "transaction_subject": "",
            "payment_gross": "12.00",
            "shipping": "0.00",
            "ipn_track_id": "f7ee2b6f5874e",
            "custom": "" //i used cart_id with this field
        }
        */
        if(!empty($_POST))
        {
            $transactionId  = Input::get('txn_id');
            $payerId        = Input::get('payer_id'); 
            $cartId         = Input::get('custom');
            $currency       = Input::get('mc_currency');
            
            //set cartId
            MyCart::setCartId($cartId);
            MyCart::loadPayload();
            
            if(MyCart::placeOrder($currency, $transactionId, $payerId, ORDER_NEW))
            {
                //send order confirmation email to customer
                $this->_sendOrderConfirmationEmail(MyCart::getCompletedOrderId());
            }
            else
            {
                //Fail
            }
        }
        
        exit;
    }
    
    //ajax actions
    public function ajaxSetShipping()
    {
        $result = array('status' => false, 'errors' => array(), 'msg' => '');
        
        $shippingAddress = Input::get('shipping');
        
        //validate posts
        $rules = [
            'first_name'  => 'required', 
            'last_name'   => 'required', 
            //'email'       => 'required|email', 
            'country'     => 'required', 
            'address'     => 'required', 
            'city'        => 'required', 
            'state'       => 'required', 
            'zipcode'     => 'required', 
            'phone'       => 'required', 
            'note'        => '', 
        ];
        
        $messages = [
            'first_name.required' => 'First Name is required.',
            'last_name.required'  => 'Last Name is required.',
            //'email.required'      => 'Email is required.',
            //'email.email'         => 'Please input valid email address.',
            'country.required'    => 'country is required.',
            'address.required'    => 'Address is required.',
            'city.required'       => 'City is required.',
            'state.required'      => 'state is required.',
            'zipcode.required'    => 'Postal / Zipcode is required.',
            'phone.required'      => 'Phone number is required.',
        ];
        
        $validator = Validator::make($shippingAddress, $rules, $messages);
        if ($validator->fails()) 
        {
            $result['errors'] = $validator->errors()->getMessages();
        }
        else
        {
            $result['status'] = true;
            
            $countryRow = Country::find($shippingAddress['country']);
            $stateRow = Region::find($shippingAddress['state']);
            $shippingAddress['country_name']= isset($countryRow->name) ? $countryRow->name : '';
            $shippingAddress['country_code']= isset($countryRow->iso) ? $countryRow->iso : '';
            $shippingAddress['state_name']  = isset($stateRow->name) ? $stateRow->name : '';
            $shippingAddress['state_code']  = isset($stateRow->iso) ? $stateRow->iso : '';
            
            MyCart::saveShippingAddress($shippingAddress);
        }
        
        echo json_encode($result); 
        exit;
    }
    
    public function ajaxGetBilling()
    {
        //get cart
        $cart = MyCart::get();
        
        if(!$orderInfo = MyCart::hasOrderInfo()) exit;
        
        $orderInfo = MyCart::getOrderInfo();
        $address = $orderInfo['shippingAddress'];
        $regions = Region::where('country_id', $address['country'])->lists('name', 'id');
            
        return $this->view('cart.checkout.billing', compact('address', 'cart', 'regions')); 
    }
    
    public function ajaxSetBilling()
    {
        $result = array('status' => false, 'errors' => array(), 'msg' => '');
        
        $billingAddress = Input::get('billing');
        
        //validate posts
        $rules = [
            'first_name'  => 'required', 
            'last_name'   => 'required', 
            //'email'       => 'required|email', 
            'country'     => 'required', 
            'address'     => 'required', 
            'city'        => 'required', 
            'state'       => 'required', 
            'zipcode'     => 'required', 
            'phone'       => 'required', 
            'note'        => '', 
        ];
        
        $messages = [
            'first_name.required' => 'First Name is required.',
            'last_name.required'  => 'Last Name is required.',
            //'email.required'      => 'Email is required.',
            //'email.email'         => 'Please input valid email address.',
            'country.required'    => 'country is required.',
            'address.required'    => 'Address is required.',
            'city.required'       => 'City is required.',
            'state.required'      => 'state is required.',
            'zipcode.required'    => 'Postal / Zipcode is required.',
            'phone.required'      => 'Phone number is required.',
        ];
        
        $validator = Validator::make($billingAddress, $rules, $messages);
        if ($validator->fails()) 
        {
            $result['errors'] = $validator->errors()->getMessages();
        }
        else
        {
            $result['status'] = true;
            
            $countryRow = Country::find($billingAddress['country']);
            $stateRow = Region::find($billingAddress['state']);
            $billingAddress['country_name']= isset($countryRow->name) ? $countryRow->name : '';
            $billingAddress['country_code']= isset($countryRow->iso) ? $countryRow->iso : '';
            $billingAddress['state_name']  = isset($stateRow->name) ? $stateRow->name : '';
            $billingAddress['state_code']  = isset($stateRow->iso) ? $stateRow->iso : '';
            
            MyCart::saveBillingAddress($billingAddress);
        }
        
        echo json_encode($result); 
        exit;
    }
    
    public function ajaxGetShipment()
    {
        if(!$orderInfo = MyCart::hasOrderInfo()) exit;
        
        $orderInfo = MyCart::getOrderInfo();
        $shippingAddress = $orderInfo['shippingAddress'];
        $currency = MyCart::getCurrencyFromAddress();
        
        //get cart
        $cart = MyCart::get();
        
        //get shipping methods
        //print_r($shippingAddress);
        $shipping = new FedexShipping;
        $shippingMethods = $shipping->setRecipient(
                $shippingAddress['first_name'].' '.$shippingAddress['last_name'], 
                $shippingAddress['address'],
                $shippingAddress['city'],
                $shippingAddress['state_code'],
                trim($shippingAddress['zipcode']),
                $shippingAddress['country_code'])
            ->getAvailableMethods($cart->totalWeight());
        
        Session::set('fedex_rates', $shippingMethods);
        Session::save();
        //print_r($shipping->getService()->getLastResponse());
        
        return $this->view('cart.checkout.shipment', compact('shippingAddress', 'cart', 'shippingMethods', 'currency'));    
        exit;
    }
    
    public function ajaxSetShipment()
    {
        $result = array('status' => false, 'error' => array(), 'msg' => '');
        if(Input::has('shipping-option'))
        {
            $serviceType = Input::get('shipping-option');
            if (\Arkitecht\FedEx\Enums\ServiceType::valueIsValid($serviceType)
                && Session::has('fedex_rates'))
            {
                $saveMethods = Session::get('fedex_rates');
                $shippingMethod = $saveMethods[$serviceType];
                
                MyCart::saveShippingMethod($shippingMethod);
            
                $result['status'] = true;
            }
            else
            {
                $result['error'] = 'Please select valid shipping option.';
            }
        }
        else
        {
            $result['error'] = 'Please select valid shipping option.';
        }
        
        echo json_encode($result);
        exit;    
    }
    
    public function ajaxGetPayment()
    {
        if(!$orderInfo = MyCart::hasOrderInfo()) exit;
        
        //get cart
        $cart = MyCart::getFinal();
        $currency = MyCart::getCurrencyFromAddress();
        
        return $this->view('cart.checkout.payment', compact('cart', 'currency'));    
        exit;
    }
    
    public function ajaxSetPayment()
    {
        $result = array('status' => false, 'error' => array(), 'msg' => '');
        if(Input::has('payment-method'))
        {
            $paymentMethod = Input::get('payment-method');
            if($paymentMethod == PAYMENT_CREDIT || $paymentMethod = PAYMENT_PAYPAL)
            {
                if($paymentMethod == PAYMENT_PAYPAL)
                {
                    $paymethod = [
                        'code' => $paymentMethod,
                        'name' => 'Paypal'
                    ];
                    MyCart::savePaymentMethod((object)$paymethod);
                    
                    $result['status'] = true;
                }
                else
                {
                    $cardName = Input::get('card-name');
                    $cardType = Input::get('card-type');
                    $cardNo   = Input::get('card-number');
                    $expMon   = Input::get('expire-month');
                    $expYear  = Input::get('expire-year');
                    $cvc      = Input::get('card-cvc');
                    
                    if(!CardValidation::validCreditCard($cardNo, $cardType))    
                    {
                        $result['error']  = 'Please input valid card number.';
                    }
                    else if(!CardValidation::validDate($expYear, $expMon))    
                    {
                        $result['error']  = 'Please input valid expiry date.';
                    }
                    else if(!CardValidation::validCvc($cvc, $cardType))    
                    {
                        $result['error']  = 'Please input valid security code.';
                    }
                    else
                    {
                        $paymethod = [
                            'code' => $paymentMethod,
                            'name' => 'CreditCard',
                            'card' => [
                                'name'  => $cardName,
                                'number'=> $cardNo,
                                'type'  => $cardType,
                                'mon'   => $expMon,
                                'year'  => $expYear,
                                'cvv'   => $cvc
                            ]
                        ];
                        MyCart::savePaymentMethod((object)$paymethod);
                        
                        $result['status'] = true;
                    }                    
                }                   
            }
            else
            {
                $result['error'] = 'Please select valid payment option.';
            }
        }
        else
        {
            $result['error'] = 'Please select valid payment option.';
        }
        
        echo json_encode($result);
        exit;    
    }
    
    public function ajaxGetConfirm()
    {
        $cart = MyCart::getFinal();
        
        $shippingAddress= MyCart::getShippingAddress();
        $billingAddress = MyCart::getBillingAddress();
        $shippingMethod = MyCart::getShippingMethod();
        $paymentMethod  = MyCart::getPaymentMethod();
        $currency = MyCart::getCurrencyFromAddress();
        
        //check shipping is required, then set shipping and tax
        if($cart->isShippingRequired())
        {
            return $this->view('cart.checkout.confirm', compact('cart', 'shippingAddress', 'billingAddress', 'shippingMethod', 'paymentMethod', 'currency'));    
        }
        else
        {
            return $this->view('cart.checkout.confirm_noshipping', compact('cart', 'shippingAddress', 'paymentMethod', 'currency'));    
        }
        exit;
    }
    
    /**
    * add coupon to cart for discount
    * 
    */
    public function ajaxApplyCoupon() 
    {
        $couponCode = Input::get('coupon');
        $message = '';
        
        //check coupon is valid
        $row = Coupon::where('code', 'like binary', $couponCode)->first();
        if(!isset($row->id)) 
        {
            $message = 'Coupon code "' . htmlspecialchars($couponCode) . '" is not valid.';
        }
        else
        {
            if($row->start_date > time() || $row->end_date < time())
            {
                $message = 'Coupon code "' . htmlspecialchars($couponCode) . '" is not valid.';
            }
            else if($row->limit_time > 0 && $row->limit_time <= $row->used_time)
            {
                $message = 'Coupon code "' . htmlspecialchars($couponCode) . '" is reached to limit.';
            } 
            else
            {
                //save coupon to cart
                $coupon = array(
                    'id'        => $row->id,
                    'code'      => $couponCode,
                    'percent'   => $row->discount_percent
                );
                MyCart::saveCoupon($coupon);
            }
        }
        
        //return
        $cart = MyCart::getFinal();
        $currency = MyCart::getCurrencyFromAddress();
        
        return $this->view('cart.checkout._order_summary', compact('cart', 'message', 'currency'));      
    }
    
    /**
    * remove coupon from cart
    * 
    */
    public function ajaxCancelCoupon() 
    {
        if(MyCart::getCoupon() == false) exit;
        
        MyCart::removeCoupon();
        $message = 'Coupon code is removed.';
        
        //return
        $cart = MyCart::getFinal();
        $currency = MyCart::getCurrencyFromAddress();
        
        return $this->view('cart.checkout._order_summary', compact('cart', 'message', 'currency'));              
    }
    
    public function ajaxUpdateAddress()
    {
        $addressId = Input::get('address-id');
        $type = Input::get('type');
        $address = null;
        
        if($type == 'billing') 
        {
            $address = CustomerBillingAddress::find($addressId);
            $regions = array();
            if(!isset($address->id))
            {
                $address = MyCart::getShippingAddress();
                $regions = Region::where('country_id', $address['country'])->lists('name', 'id');
            }
            return $this->view('cart.checkout._billing_form', compact('address', 'regions'));               
        }
        else if($type == 'shipping') 
        {
            $address = CustomerShippingAddress::find($addressId);
            return $this->view('cart.checkout._shipping_form', compact('address'));               
        }
        exit;
    }
    
    ////////////////////////////////////////////////////////////////
    // Private Methods
    ////////////////////////////////////////////////////////////////
    private function _sendOrderConfirmationEmail($orderId)
    {
        $order = Order::find($orderId);
        $data = array('order' => $order, 'settings' => $this->settings);
        
        //$this->sendMail('emails.orderConfirmation', $order->billing_email, $order->billing_name, $data, 'RockDesign Online Order Dept.');
        $this->sendMail('emails.orderConfirmation', $order->customer_email, $order->customer_name, $data, 'RockDesign Online Order Dept.');
    }
}