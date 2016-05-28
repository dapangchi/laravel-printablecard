<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Models\Country;
use Input, Validator;

class SamplePackController extends FrontController {
    
    private $samplePacks = array(); 
    
    public function __construct() {
        parent::__construct();
        
        $countryArray = Country::select('name')
            ->orderBy('sort')
            ->orderBy('name')
            ->get()
            ->toArray();
        $countries = array();
        foreach($countryArray as $item) $countries[] = $item['name'];
        
        $this->premium = array(
            'canada' => array(
                'currency'=> 'CAD',
                'country' => 'Canada',
                'packCode'=> '6AV8XNN4VEWK4',
                'packName'=> 'Premium Sample Pack',
                'basePrice' => 8,
                'validCountries'  => array('Canada'),
                'deliveryMethods' => array(
                    'Regular Mail' => array(
                        'price' => 8,
                        'name'  => 'Regular Mail $8.00 CAD'
                    ),
                    'FedEx Overnight' => array(
                        'price' => 26,
                        'name'  => 'FedEx Overnight $26.00 CAD'
                    ),
                ),
            ),
            'usa' => array(
                'currency'=> 'USD',
                'country' => 'USA',
                'packCode'=> '2P3GRWMYW9NNQ',
                'packName'=> 'Premium Sample Pack',
                'basePrice' => 8,
                'validCountries'  => array('USA'),
                'deliveryMethods' => array(
                    'Regular Mail' => array(
                        'price' => 8,
                        'name'  => 'Regular Mail $8.00 USD'
                    ),
                    'FedEx Overnight' => array(
                        'price' => 30,
                        'name'  => 'FedEx Overnight $30.00 USD'
                    ),
                ),
            ),
            'worldwide' => array(
                'currency'=> 'USD',
                'country' => 'Worldwide',
                'packCode'=> 'EBQPJ9SUVE8BJ',
                'packName'=> 'Premium Sample Pack',
                'basePrice' => 14,
                //'validCountries'  => array('India', 'China', 'Norwey', 'Germany', 'Argentina'),
                'validCountries'  => $countries,
                'deliveryMethods' => array(
                    'Regular Mail' => array(
                        'price' => 14,
                        'name'  => 'Regular Mail $14.00 USD'
                    ),
                ),
            ),
        );
        
        $this->metal = array(
            'canada' => array(
                'currency'=> 'CAD',
                'country' => 'Canada',
                'packCode'=> 'K7U2QVUCKA64C',
                'packName'=> 'Premium Sample Pack + Metal Cards',
                'basePrice' => 14,
                'validCountries'  => array('Canada'),
                'deliveryMethods' => array(
                    'Regular Mail' => array(
                        'price' => 14,
                        'name'  => 'Regular Mail $14.00 CAD'
                    ),
                    'FedEx Overnight' => array(
                        'price' => 32,
                        'name'  => 'FedEx Overnight $32.00 CAD'
                    ),
                ),
            ),
            'usa' => array(
                'currency'=> 'USD',
                'country' => 'USA',
                'packCode'=> '7N2CWHERE2S7C',
                'packName'=> 'Premium Sample Pack + Metal Cards',
                'basePrice' => 14,
                'validCountries'  => array('USA'),
                'deliveryMethods' => array(
                    'Regular Mail' => array(
                        'price' => 14,
                        'name'  => 'Regular Mail $14.00 USD'
                    ),
                    'FedEx Overnight' => array(
                        'price' => 35,
                        'name'  => 'FedEx Overnight $35.00 USD'
                    ),
                ),
            ),
            'worldwide' => array(
                'currency'=> 'USD',
                'country' => 'Worldwide',
                'packCode'=> 'VMHY6PP6JA7A4',
                'packName'=> 'Premium Sample Pack + Metal Cards',
                'basePrice' => 20,
                'validCountries'  => $countries,
                'deliveryMethods' => array(
                    'Regular Mail' => array(
                        'price' => 20,
                        'name'  => 'Regular Mail $20.00 USD'
                    ),
                ),
            ),
        );
    }
    
    public function total()
    {    
        $this->page_title = 'Order Sample Pack';
        return $this->view('catalog.sample.list'); 
    }
    
    public function premium()
    {
        $this->page_title = 'Premium Sample Pack';
        return $this->view('catalog.sample.premium', array('packData' => $this->premium));   
    }
    
    public function metal() 
    {
        $this->page_title = 'Rockdesign Premium Sample Pack + Metal Cards';
        return $this->view('catalog.sample.metal', array('packData' => $this->metal));    
    }
    
    public function postRequest()
    {
        //validate posts
        $rules = [
            'code' => 'required_with:canada,usa,worldwide',
            'shipping-type'     => 'required',
            //'customer-name'     => 'required',
            'customer-phone'     => 'required',
            'customer-email'    => 'required|email',
            /*'customer-address'  => 'required',
            'customer-country'  => 'required',
            'customer-state'    => 'required',
            'customer-zipcode'  => 'required',*/
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $code = Input::get('code');
        $pack = Input::get('pack');
        $shippingType = Input::get('shipping-type');
        $packData = null;
        $item = null;
        $custom = null;
        $cancelUrl = '';
        
        if($pack == 'premium') { 
            $packData = $this->premium[$code];
            $item = array('name' => 'Premium Sample Pack', 'price' => $packData['deliveryMethods'][$shippingType]['price']);
            
            $custom = array('packName' => 'Premium Sample Pack');
            $cancelUrl = route('page.premium.pack.html');
        } else {
            $packData = $this->metal[$code];
            $item = array('name' => 'Premium Sample Pack + Metal Cards', 'price' => $packData['deliveryMethods'][$shippingType]['price']);
            
            $custom = array('packName' => 'Premium Sample Pack + Metal Cards');
            $cancelUrl = route('page.metal.pack.html');
        }
        
        $currency = $packData['currency'];
        $custom['shipping'] = $packData['deliveryMethods'][$shippingType]['name'];
        $custom['price']    = format_currency($packData['deliveryMethods'][$shippingType]['price'], $currency);
        //$custom['customerName']     = Input::get('customer-name');
        $custom['customerPhone']    = Input::get('customer-phone');
        $custom['customerEmail']    = Input::get('customer-email');
        
        if($code == 'worldwide') {
            $custom['customerAddress']  = Input::get('customer-address');
            $custom['customerCountry']  = Input::get('customer-country');
            $custom['customerState']    = Input::get('customer-state');
            $custom['customerZipcode']  = Input::get('customer-zipcode');
            
            $subject = $custom['customerEmail'] . ' - International Sample pack ( ' . ($pack == 'premium' ? 'non-metal' : 'metal') . ' ) ';
            $this->sendMail('emails.purchaseSample', $this->settings['email.saler_email'], $this->settings['email.saler_name'], $custom, $subject);        
            
            Template::set_message('We received your inquiry.');
            return redirect($cancelUrl);
        } else {
            //redirect to paypal
            $params = [
                'packCode'      => $packData['packCode'],
                'currency'      => $currency,
                'return_url'    => url('/'),
                'cancel_url'    => $cancelUrl,
                'notify_url'    => route('page.sample.pack.ipn'),
                'custom'        => $custom,
                'items'         => array($item),
                'deliveryMethod'=> $shippingType,
            ];
            $this->paypalForm($params);    
        }
    }
    
    public function paypalIPNListener()
    {
        if(!empty($_POST))
        {
            /////////////////////
            $f = fopen(upload_path('text.txt'), 'w');
            fwrite($f, json_encode($_POST, JSON_PRETTY_PRINT));
            fclose($f);
            /////////////////////
            
            //packId:email:phone
            $custom = Input::get('custom');
            $params = unserialize($custom);
            
            //send mail to sample@rockdesign.com
            $this->sendMail('emails.purchaseSample', $this->settings['email.sampler_email'], $this->settings['email.sampler_name'], $params, 'Sample Purchase Request');
            //$this->sendMail('emails.purchaseSample', 'dapangchi@gmail.com', 'Sample Manager', $data, 'Sample Purchase Request');
        }
    }
    
    protected function paypalForm($params) { ?>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" name="paypal">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="<?php echo $params['packCode'] ?>">
            
            <input type="hidden" name="on0" value="Delivery Methods">
            <input type="hidden" name="os0" value="<?php echo $params['deliveryMethod']; ?>">
            <input type="hidden" name="on1" value="Contact Phone">
            <input type="hidden" name="os1" value="<?php echo $params['custom']['customerPhone']; ?>">
            <input type="hidden" name="on2" value="Contact Email">
            <input type="hidden" name="os2" value="<?php echo $params['custom']['customerEmail']; ?>">
            
            <!--<input type="hidden" name="business" value="<?php echo $this->settings['sales.paypal_email'] ?>" />-->
            <input type="hidden" name="currency_code" value="<?php echo $params['currency']; ?>">
            <input type="hidden" name="return" value="<?php echo $params['return_url']; ?>">
            <input type="hidden" name="cancel_return" value="<?php echo $params['cancel_url']; ?>">
            <input type="hidden" name="bn" value="Go to MyAccount Page"/>
            <input type="hidden" name="cbt" value="Return to The Site"/>
            <input type="hidden" name="notify_url" value="<?php echo $params['notify_url']; ?>"/>
            <input type="hidden" name="custom" value="<?php echo serialize($params['custom']); ?>"/>
        </form>
        <h4>Your payment is loading please wait...</h4>  
        <script>document.paypal.submit();</script>
        <?php
        exit;
    }
}