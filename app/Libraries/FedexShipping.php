<?php
namespace App\Libraries;

use Arkitecht\FedEx\Laravel\FedEx;

use Arkitecht\FedEx\Structs\RequestedShipment;   
use Arkitecht\FedEx\Structs\Party;
use Arkitecht\FedEx\Structs\Contact;
use Arkitecht\FedEx\Structs\Address;
use Arkitecht\FedEx\Structs\ContactAndAddress;
use Arkitecht\FedEx\Structs\Weight;
use Arkitecht\FedEx\Structs\Money;
use Arkitecht\FedEx\Structs\Payment;
use Arkitecht\FedEx\Structs\Payor;
use Arkitecht\FedEx\Structs\RequestedPackageLineItem;
use Arkitecht\FedEx\Structs\Dimensions;
use Arkitecht\FedEx\Structs\TransactionDetail;
use Arkitecht\FedEx\Structs\VersionId;

use Arkitecht\FedEx\Enums\DropoffType;
use Arkitecht\FedEx\Enums\PackagingType;

use App\Models\Setting;

class FedexShipping {
    
    private $_instance;
    private $_request;
    private $_service;
    
    private $_shipper;
    private $_recipient;
    public function __construct()
    {
        $settings = Setting::allBy();    
        
        $fedexConfig = array(
            'key'    => $settings['sales.fedex_key'],
            'password'=> $settings['sales.fedex_pass'],
            'account'=> $settings['sales.fedex_account'],
            'meter'  => $settings['sales.fedex_meter'],
            'beta'   => $settings['sales.fedex_beta'],
        );
        $this->_instance = new FedEx($fedexConfig);
        
        $this->_request = $this->_instance->rateRequest();
        $this->_request->setTransactionDetail(new TransactionDetail(' *** Rate Request using PHP ***'));
        $this->_request->setVersion(new VersionId('crs', '18', '0', '0'));
        $this->_request->setReturnTransitAndCommit(true);
        
        $this->setShipper($settings['store.owner'], $settings['store.address'], $settings['store.city'], 
            $settings['store.state'], $settings['store.zipcode'], $settings['store.country']);
    }    
    
    public function setShipper($name, $address, $city, $state, $zipcode, $country)
    {
        $this->_shipper = new Party();
        $this->_shipper->setContact(new Contact(null, $name));
        $this->_shipper->setAddress(new Address($address, $city, $state, $zipcode, '', $country));    
        
        return $this;
    }
    
    public function setRecipient($name, $address, $city, $state, $zipcode, $country)
    {
        $this->_recipient = new Party();
        $this->_recipient->setContact(new Contact(null, $name));
        $this->_recipient->setAddress(new Address($address, $city, $state, $zipcode, '', $country));
        
        return $this;
    }
    
    public function getAvailableMethods($weight=1, $weightUnit='KG', $length=1, $width=1, $height=1, $dimensionUnit='IN')
    {
        //weight & dimension
        $weight = new Weight($weightUnit, $weight);
        $dimension = new Dimensions($length, $width, $height, $dimensionUnit); 
        
        //payor
        $payor = new Payor;
        $payor->setResponsibleParty(new Party($this->_instance->getClientDetail()->getAccountNumber()));
        
        //package item
        $requestedPackageLineItems = new RequestedPackageLineItem(1, 1, 1, null, null, $weight, $dimension, 'BOX');
        
        $shipmentRequest = new RequestedShipment();
        $shipmentRequest->setShipTimestamp(date('c'))
            ->setDropoffType(DropoffType::VALUE_REGULAR_PICKUP)
            //->setServiceType('INTERNATIONAL_ECONOMY')
            ->setPackagingType(PackagingType::VALUE_YOUR_PACKAGING)
            //->setVariationOptions($variationOptions)
            //->setTotalWeight($weight)
            //->setTotalInsuredValue(new Money('USD', 100))
            //->setPreferredCurrency($preferredCurrency)
            ->setShipper($this->_shipper)
            ->setRecipient($this->_recipient)
            //->setRecipientLocationNumber($recipientLocationNumber)
            //->setOrigin(new ContactAndAddress(new Contact(null, 'Tomasz Nowak', '', '', '23432432', '', '', '', '', 'sss@gmail.com'), new Address('Street1', 'Collierville', 'TN', '38017', '', 'US', 'United States')))
            //->setSoldTo($recipient)
            //->setShippingChargesPayment(new Payment('SENDER', $payor))
            //->setSpecialServicesRequested($specialServicesRequested)
            //->setExpressFreightDetail($expressFreightDetail)
            //->setFreightShipmentDetail($freightShipmentDetail)
            //->setDeliveryInstructions($deliveryInstructions)
            //->setVariableHandlingChargeDetail($variableHandlingChargeDetail)
            //->setCustomsClearanceDetail($customsClearanceDetail)
            //->setPickupDetail($pickupDetail)
            //->setSmartPostDetail($smartPostDetail)
            //->setBlockInsightVisibility($blockInsightVisibility)
            //->setLabelSpecification($labelSpecification)
            //->setShippingDocumentSpecification($shippingDocumentSpecification)
            //->setRateRequestTypes($rateRequestTypes)
            //->setEdtRequestType($edtRequestType)
            ->setPackageCount(1)
            //->setShipmentOnlyFields($shipmentOnlyFields)
            //->setConfigurationData($configurationData)
            ->setRequestedPackageLineItems($requestedPackageLineItems);
        $this->_request->setRequestedShipment($shipmentRequest);
        
        $this->_service = $this->_instance->rateService();
        $response = $this->_service->getRates($this->_request);        
        
        $result = array();
        if(is_array($response->getRateReplyDetails()))
        {
            foreach($response->getRateReplyDetails() as $row)
            {
                if($row->ServiceType == 'INTERNATIONAL_FIRST') continue;
                
                $item = (object)array();
                $item->serviceType = $row->ServiceType;
                $item->serviceName = trans('shipping.fedex.' . $row->ServiceType);      
                $item->delivery = '';
                if(isset($row->DeliveryTimestamp)) {
                    $date1 = date_create(date("Y-m-d"));
                    $date2 = date_create($row->DeliveryTimestamp);
                    $diff = date_diff($date1,$date2);
                    
                    $item->delivery = $diff->format("%a days");
                } else if(isset($item->transitTime)) {
                    $item->delivery = get_transit_time($row->TransitTime);                
                }
                
                if(is_array($row->RatedShipmentDetails)) $item->amount = $row->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Amount;
                else $item->amount  = $row->RatedShipmentDetails->ShipmentRateDetail->TotalNetCharge->Amount;                    
                    
                $result[$row->ServiceType] = $item;
            }
        }
        
        return $result;
    }
    
    public function getService()
    {
        return $this->_service;
    }
}