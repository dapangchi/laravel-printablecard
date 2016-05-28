<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Core\BasicController;
use App\Models\CardCategory;
use App\Models\Card;
use App\Models\CardDiscount;
use App\Models\CardQuantity;
use App\Models\CardOption;
use App\Models\CardTemplate;
use App\Models\Design;
use App\Models\Cart;

use App\Libraries\MyCart;

use CustomerAuth, Session, Request;  

class FrontController extends BasicController 
{
    protected $current_customer = null;
    
    public function __construct()
    {
        parent::__construct();    
        
        // If customer is logged in, then get customer
        $this->auth = new CustomerAuth();
        if($this->auth->isLoggedIn())
        {
            $this->current_customer = $this->auth->customer();
            $this->data['current_customer'] = $this->current_customer;
        }
        
        //to display in topmenu
        //get business card categories
        $this->data['business_card_categories'] = CardCategory::where('service_id', SVC_BUSINESS_CARD)
            ->orderBy('created_at')
            //->limit(6)
            ->get();
        
        //get invitation card categories
        $this->data['invitation_card_categories'] = CardCategory::where('service_id', SVC_INVITATION_CARD)
            ->orderBy('created_at')
            ->limit(3)
            ->get();   
            
        //get business card templates
        $this->data['business_card_templates'] = CardTemplate::orderByRaw("RAND()")
            ->where('service_id', SVC_BUSINESS_TEMPLATE)
            ->limit(9)
            ->get();
        
        //get design service categories
        $this->data['design_services'] = Design::orderBy('name')
            ->limit(10)
            ->get();
        
        //get my cart
        $this->data['cart'] = MyCart::get(false, true);
    }
    
    protected function view($view, $data = array())
    {    
        return parent::view("frontend.{$view}", $data);
    }  
    
    protected function paypalForm($params)
    {
        $server = 'www.paypal.com';
        if($this->settings['sales.paypal_mode'] == 0) //test mode
        {
            $server = 'www.sandbox.paypal.com';
        }
                
        echo '<form name="paypal" action="https://' . $server . '/cgi-bin/webscr" method="post" id="paypal_form">';
        echo '<input type="hidden" name=cmd value="_cart" />';
        echo '<input type="hidden" name="upload" value="1">';
        echo '<input type="hidden" name=business value="'. $this->settings['sales.paypal_email'] . '" />';
        //echo '<input type="hidden" name="currency_code" value="' . MyCart::getCurrency() . '">';
        echo '<input type="hidden" name="currency_code" value="' . MyCart::getCurrencyFromAddress() . '">';
        echo '<input type="hidden" name="return" value="' . $params['return_url'] . '">';
        echo '<input type="hidden" name="cancel_return" value="' . $params['cancel_url'] . '">';
        echo '<input type="hidden" name="bn" value="Go to MyAccount Page"/>';
        echo '<input type="hidden" name="cbt" value="Return to The Site"/>';
        echo '<input type="hidden" name="notify_url" value="' . $params['notify_url'] . '"/>';
        echo '<input type="hidden" name="custom" value="' . $params['custom'] . '"/>';
        
        foreach($params['items'] as $i => $item)
        {
            $index = $i + 1;
            echo "<input type='hidden' name='item_name_{$index}' value='{$item['name']}'>";
            echo "<input type='hidden' name='amount_{$index}' value='{$item['price']}'>";
            echo "<input type='hidden' name='quantity_{$index}' value='1'>";
        }
        
        if($params['discount'] > 0)
        {
            echo '<input type="hidden" name="discount_amount_cart" value="' . $params['discount'] . '"/>';    
        }
                         
        echo '</form>';
        echo "<h4>Your payment is loading please wait...</h4>";
        echo '<script>document.paypal.submit();</script>';
        exit;
    } 
}