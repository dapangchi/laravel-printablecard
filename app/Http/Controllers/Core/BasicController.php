<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Libraries\MyCart;
use App\Models\Setting;
use App\Models\CountryIP;
use Mail, Request;

class BasicController extends Controller 
{
    protected $data = array();
    protected $settings = array();
    protected $auth = null;
    
    protected $page_title = '';
    protected $page_class = '';
    protected $page_menu = '';
    
    public function __construct()
    {      
        //check country
        //if canada, then set currency to CAD
        $clientIP = Request::ip();
        //$clientIP = '24.114.29.162';
        if(CountryIP::checkInCanada($clientIP))
        {
            MyCart::setCurrency('CAD');
        }
        else
        {
            MyCart::setCurrency('USD');
        }
        
         $this->settings = Setting::allBy();    

         $this->data['settings'] = $this->settings;
         $this->data['currency'] = MyCart::getCurrency();
    }
    
    protected function view($view, $data = array())
    {
        $this->data['page_title'] = $this->page_title;
        $this->data['page_class'] = $this->page_class;
        $this->data['page_menu'] = $this->page_menu;
        
        return view($view, $data, $this->data);
    }   
    
    protected function sendMail($mailTemplate, $receiverMail, $receiverName='', $data=array(), $subject='Rockdesign Notification')
    {
        $this->to_email = $receiverMail;
        $this->to_name = $receiverName;
        $this->mail_subject = $subject;
        
        $data['receiverName'] = $receiverName;
        Mail::send($mailTemplate, $data, function($message) 
        {
            $message->from($this->settings['email.sender_email'], $this->settings['email.sender_name'])
                ->to($this->to_email, $this->to_name)
                ->subject($this->mail_subject);
        });
    }	
    
    protected function paypalForm($params)
    {
        $server = 'www.paypal.com';
        if($this->settings['sales.paypal_mode'] == 0) //test mode
        {
            $server = 'www.sandbox.paypal.com';
        }
                
        echo '<form name="paypal" action="https://' . $server . '/cgi-bin/webscr" method="post" id="paypal_form">';
        echo '<input type=hidden name=cmd value="_cart" />';
        echo '<input type="hidden" name="upload" value="1">';
        echo '<input type=hidden name=business value="'. $this->settings['sales.paypal_email'] . '" />';
        echo '<input type="hidden" name="currency_code" value="' . MyCart::getCurrency() . '">';
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
                         
        echo '</form>';
        echo "<h4>Your payment is loading please wait...</h4>";
        echo '<script>document.paypal.submit();</script>';
        exit;
    }
}