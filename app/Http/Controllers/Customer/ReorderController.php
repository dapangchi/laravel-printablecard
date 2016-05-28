<?php


namespace App\Http\Controllers\Customer;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use App\Http\Controllers\Core\FrontController;
use App\Models\OrderItem;                             
use App\Models\Card;
use App\Models\CardTemplate;                             
use App\Models\DesignPackage;

class ReorderController extends FrontController {
        
    public function item($itemId)
    {
        $orderItem = OrderItem::find($itemId);
        if(!isset($orderItem->id))
        {
            throw new NotFoundHttpException(array());
        }
        
        $view = '';
        $product = null;
        if($orderItem->product_type == PRODUCT_TEMPLATE)
        {
            $product = CardTemplate::find($orderItem->product_id);
            $view = 'customer.reorder.template';
        }
        else if($orderItem->product_type == PRODUCT_CARD)
        {
            $product = Card::find($orderItem->product_id);
            $view = 'customer.reorder.card';
        }
        else if($orderItem->product_type == PRODUCT_DESIGN)
        {
            $product = DesignPackage::find($orderItem->product_id);
            $view = 'customer.reorder.design';    
        }
        else
        {
            throw new NotFoundHttpException(array());    
        }
        
        $this->page_title = $product->name;
        return $this->view($view, compact('product', 'orderItem'));    
    }
}