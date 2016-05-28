<?php

ini_set("soap.wsdl_cache_enabled", "0");

class Fedex {
    private $_key   = '';
    private $_pass  = '';
    private $_account = '';
    private $_meter = '';
    
    private $_request = null;
    private $_client = null;
   
    private $_errors = array();
    
    private $_wsdls = array(
        'RateService'       => 'RateService_v18.wsdl',
        'TrackService'      => 'TrackService_v5.wsdl'
    );
        
    private $_serviceTypes = array(
        'PRIORITY_OVERNIGHT'    => 'FedEx Priority Overnight',
        'STANDARD_OVERNIGHT'    => 'FedEx Standard Overnight',
        'FEDEX_2_DAY'           => 'FedEx 2 Day',
        'FEDEX_2_DAY_AM'        => 'FedEx 2 Day AM',
        'FEDEX_EXPRESS_SAVER'   => 'FedEx Express Saver',
        'FEDEX_FIRST_FREIGHT'   => 'FedEx 1 Day Freight',
        'FEDEX_FREIGHT_PRIORITY'=> 'FedEx Freight Priority',
        'FEDEX_FREIGHT_ECONOMY' => 'FedEx Freight Economy',
        'FIRST_OVERNIGHT'       => 'FedEx Overnight',
        'SAME_DAY'              => 'FedEx Same Day',
        'SAME_DAY_CITY'         => 'FedEx Same City',
    );
    
    public function __construct($key, $password, $account, $meter)
    {
        $this->_key = $key;
        $this->_pass = $password;
        $this->_account = $account;
        $this->_meter = $meter;
        
        $this->_initRequest();
    }
    
    private function _initRequest() 
    {
        $this->_request = array();
        
        //web authentication
        $this->_request['WebAuthenticationDetail'] = array(
            'ParentCredential' => array(
                'Key'       => NULL,
                'Password'  => NULL,
            ),
            'UserCredential' => array(
                'Key'       => $this->_key,
                'Password'  => $this->_pass,
            ),
        );
        
        //client detail
        $this->_request['ClientDetail'] = array(
            'AccountNumber' => $this->_account, 
            'MeterNumber'   => $this->_meter,
        ); 
        
        //transaction detail
        $this->_request['TransactionDetail'] = array('CustomerTransactionId' => ' *** Rate Request using PHP ***');
        
        //version
        $this->_request['Version'] = array(
            'ServiceId' => 'crs', 
            'Major'     => '18', 
            'Intermediate' => '0', 
            'Minor'     => '0'
        );
        
    } 
    
    public function getPersonInfo($name, $company, $phone, $address, $city, $state, $zipcode, $country)
    {
        return $shipper = array(
            'Contact' => array(
                'PersonName'    => $name,
                'CompanyName'   => $company,
                'PhoneNumber'   => $phone
            ),
            'Address' => array(
                'StreetLines'   => array($address),
                'City'          => $city,
                'StateOrProvinceCode' => $state,
                'PostalCode'    => $zipcode,
                'CountryCode'   => $country
            )
        );
    }
    
    public function getLabelSpecification(){
        return array(
            'LabelFormatType'   => 'COMMON2D',  // valid values COMMON2D, LABEL_DATA_ONLY
            'ImageType'         => 'PDF',       // valid values DPL, EPL2, PDF, ZPLII and PNG
            'LabelStockType'    => 'PAPER_7X4.75'
        );
    }
    
    public function getSpecialServices(){
        return array(
            'SpecialServiceTypes' => array('COD'),
            'CodDetail' => array(
                'CodCollectionAmount' => array(
                    'Currency' => 'USD', 
                    'Amount' => 150
                ),
                'CollectionType' => 'ANY' // ANY, GUARANTEED_FUNDS
            )
        );
    }
    
    public function setEndpoint($var){
        if($var == 'changeEndpoint') Return false;
        if($var == 'endpoint') Return 'XXX';
    }
    
    public function initRateService()
    {
        //??? 
        $this->_request['ReturnTransitAndCommit'] = true;
        
        //init shipment data
        $this->_request['RequestedShipment'] = array(
            'DropoffType'   => 'REGULAR_PICKUP', // valid values REGULAR_PICKUP, REQUEST_COURIER, ...
            'ShipTimestamp' => date('c'),
            'PackagingType' => 'YOUR_PACKAGING',
            //'ServiceType'   => false,           
        );
        
        //shipping charge payment
        $this->_request['RequestedShipment']['ShippingChargesPayment'] = array(
            'PaymentType' => 'SENDER', // valid values RECIPIENT, SENDER and THIRD_PARTY
            'Payor' => array(
                'ResponsibleParty' => array(
                    'AccountNumber' => $this->_account,
                    'CountryCode' => 'CA'
                )
            )
        );
        
        return $this;
    }
    
    public function setPrice($amount, $currency='USD')  
    {
        $this->_request['RequestedShipment']['TotalInsuredValue'] = array(
            'Ammount'=>100,
            'Currency'=>'USD'
        );
        
        return $this;
    }
    
    public function setShipper($shipper)
    {
        $this->_request['RequestedShipment']['Shipper'] = $shipper;   
        
        return $this;
    } 
    
    public function setRecipient($recipent)
    {
        $this->_request['RequestedShipment']['Recipient'] = $recipent;   
        
        return $this;    
    }
    
    public function setPackage($weight=1, $weightUnit='KG', $length=1, $width=1, $height=1, $dimentionUnit='IN', $packageCount='1')
    {
        $this->_request['RequestedShipment']['PackageCount'] = $packageCount;
        
        $this->_request['RequestedShipment']['RequestedPackageLineItems'] = array(
            'SequenceNumber'    => 1,
            'GroupPackageCount' => 1,
            'Weight' => array(
                'Value' => $weight,
                'Units' => $weightUnit
            ),
            'Dimensions' => array(
                'Length'    => $length,
                'Width'     => $width,
                'Height'    => $height,
                'Units'     => $dimentionUnit
            )
        );
        
        return $this;
    }
    
    public function getRates($serviceType)
    {  
        if($serviceType)
        {
            $this->_request['RequestedShipment']['ServiceType'] = $serviceType;    
        }
        
        $path_to_wsdl = __DIR__ . '/wsdl/' . $this->_wsdls['RateService'];
        $this->_client = new SoapClient($path_to_wsdl, array('trace' => 1)); // Refer to http://us3.php.net/manual/en/ref.soap.php for more information
        
        try 
        {
            if($this->setEndpoint('changeEndpoint'))
            {
                $newLocation = $this->_client->__setLocation(setEndpoint('endpoint'));
            }
            
            $response = $this->_client->getRates($this->_request);
            if ($response -> HighestSeverity != 'FAILURE' && $response -> HighestSeverity != 'ERROR')
            {
                $result = array();
                
                $rateReply = $response -> RateReplyDetails;
                if($rateReply->RatedShipmentDetails && is_array($rateReply->RatedShipmentDetails))
                {
                    $result['price'] = $rateReply->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Amount;
                }
                elseif($rateReply->RatedShipmentDetails && ! is_array($rateReply->RatedShipmentDetails))
                {
                    $result['price'] = $rateReply->RatedShipmentDetails->ShipmentRateDetail->TotalNetCharge->Amount;
                }
                
                if(array_key_exists('DeliveryTimestamp',$rateReply))
                {
                    $result['delivery_date'] = $rateReply->DeliveryTimestamp;
                }
                else if(array_key_exists('TransitTime',$rateReply))
                {
                    $result['delivery_date'] = $rateReply->TransitTime;
                }
                else 
                {
                    $result['delivery_date'] = '';
                }
                
                return $result;
            } 
            else
            {
                return false;
            }
            
        } catch (SoapFault $exception) {       
            return false;     
        }
        
        return false;
    }
    
    public function getAvailableRates()
    {
        $result = array();
        foreach($this->_serviceTypes as $code => $type)
        {
            $response = $this->getRates($code);
            
            if(is_array($response))
            {
                $item = array();
                $item['type'] = $code;
                $item['name'] = $type;                              
                $item['price']= $response['price'];
                $item['delivery_date'] = $response['delivery_date'];
                $result[] = $item;
            }
        }
        
        return $result;
    }
}