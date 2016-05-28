<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\BasicController;
/*use Arkitecht\FedEx\Laravel\FedEx;

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
*/
use App\Libraries\FedexShipping;
use App\Libraries\MyCart;
use Omnipay\PayPal\Message\ExpressAuthorizeResponse;
use Omnipay;

class TestController extends BasicController 
{
    public function index()
    {
        
        Omnipay::setGateWay('paypalrest');
        
        // Create a credit card object
        // DO NOT USE THESE CARD VALUES -- substitute your own
        // see the documentation in the class header.
        $card = Omnipay::creditCard([
                    'firstName' => 'Example',
                    'lastName' => 'User',
                    'number' => '4539250303167921',
                    'expiryMonth'           => '01',
                    'expiryYear'            => '2020',
                    'cvv'                   => '123',
                    'billingAddress1'       => '1 Scrubby Creek Road',
                    'billingCountry'        => 'AU',
                    'billingCity'           => 'Scrubby Creek',
                    'billingPostcode'       => '4999',
                    'billingState'          => 'QLD',
        ]);
        
        $items = array(
            array('name' => 'test1', 'quantity' => 1, 'price' => 2),
            array('name' => 'test2', 'quantity' => 1, 'price' => 9),
            array('name' => 'discount', 'quantity' => 1, 'price' => -1),
        );

        // Do a purchase transaction on the gateway
        $response = Omnipay::purchase(array(
            'amount'        => '10.00',
            'currency'      => 'USD',
            'description'   => 'This is a test purchase transaction.',
            'card'          => $card,
        ))
        ->setItems($items)
        ->send();
        print_r($response);
        exit;
        if ($response->isSuccessful()) {
            echo "Purchase transaction was successful!\n";
            $sale_id = $response->getTransactionReference();
            echo "Transaction reference = " . $sale_id . "\n";
        } else {
            echo 'fail';
        }
        
        exit;
    }
    
    public function fedex()
    {
        /*$row = new FedexShipping;
        $row->setRecipient('Tomasz Nowak', 'Street1', 'Richmond', 'BC', 'V7C4V4', 'CA');
        $result = $row->getAvailableMethods();
        print_r($result);
        exit;*/
        
        /*$fedexConfig = array(
            'key'    => env('FEDEX_API_KEY', ''),
            'password'=> env('FEDEX_API_PASSWORD', ''),
            'account'=> env('FEDEX_ACCOUNT_NO', ''),
            'meter'  => env('FEDEX_METER_NO', ''),
            'beta'   => env('FEDEX_USE_BETA', ''),
        );
        $fedex = new FedEx($fedexConfig);
        
        $request = $fedex->rateRequest();
        $request->setTransactionDetail(new TransactionDetail(' *** Rate Request using PHP ***'));
        $request->setVersion(new VersionId('crs', '18', '0', '0'));
        $request->setReturnTransitAndCommit(true);
        
        $shipment = $this->_getRequestedShipment($fedexConfig);
        $request->setRequestedShipment($shipment);
        //print_r($request);
        //var_dump($shipment);
        
        
        $service = $fedex->rateService();
        //print_r($service);
        $response = $service->getRates($request);
        //print_r($service->getLastResponse());
        //print_r($service->getLastRequest());
        $reply = $this->_getShipmentMethods($response->getRateReplyDetails());
        print_r($reply);
        exit;  */
    }
    
    private function _getRequestedShipment($config)
    {
        //weight & dimension
        $weight = new Weight('KG', 1.0);
        $dimension = new Dimensions(108, 5, 5, 'IN');        
        
        //shipper
        $shipper = new Party();
        $shipper->setContact(new Contact(null, 'Tomasz Nowak'));
        $shipper->setAddress(new Address('Street1', 'Collierville', 'TN', '38017', '', 'US'));
        
        //recipient
        $recipient = new Party();
        $recipient->setContact(new Contact(null, 'Tomasz Nowak'));
        $recipient->setAddress(new Address('Street1', 'Richmond', 'BC', 'V7C4V4', '', 'CA'));
        
        //payor
        $payor = new Payor;
        //$payor->setResponsibleParty(new Party($config['account'], null, null, new Address('', '', '', '', '', 'US')));
        //$payor->setResponsibleParty(new Party($config['account']));
        
        //package item
        $requestedPackageLineItems = new RequestedPackageLineItem(1, 1, 1, null, null, $weight, $dimension, 'BOX');
        
        $result = new RequestedShipment();
        $result->setShipTimestamp(date('c'))
            ->setDropoffType(DropoffType::VALUE_REGULAR_PICKUP)
            //->setServiceType('INTERNATIONAL_ECONOMY')
            ->setPackagingType(PackagingType::VALUE_YOUR_PACKAGING)
            //->setVariationOptions($variationOptions)
            //->setTotalWeight($weight)
            //->setTotalInsuredValue(new Money('USD', 100))
            //->setPreferredCurrency($preferredCurrency)
            ->setShipper($shipper)
            ->setRecipient($recipient)
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
        return $result;
    }
    
    private function _getShipmentMethods($rateReply)
    {
        $result = array();
        
        if(is_array($rateReply))
        {
            foreach($rateReply as $row)
            {
                $item = (object)array();
                $item->serviceType = $row->ServiceType;
                $item->serviceName = trans('shipping.fedex.' . $row->ServiceType);
                $item->deliveryTimestamp = $row->DeliveryTimestamp;
                $item->transitTime = $row->TransitTime;                
                
                if(is_array($row->RatedShipmentDetails)) $item->amount = $row->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Amount;
                else $item->amount  = $row->RatedShipmentDetails->ShipmentRateDetail->TotalNetCharge->Amount;                    
                    
                $result[$row->ServiceType] = $item;
            }
        }
        
        return $result;
    }
}