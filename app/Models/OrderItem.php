<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CardTemplate;
use App\Models\Card;
use App\Models\DesignPackage;
   
/**
 * manage order items
 *
 * Class OrderItem
 * @package App\Models
 */
class OrderItem extends Model
{
    protected $table = 'order_items';
    
    public $timestamps  = false;
    
    public static $JOB_STATUS_ARRAY = array(
        JOB_UNASSIGNED  => 'Unassigned',
        JOB_WORKING     => 'Working',
        JOB_FILE_ISSUE  => 'Design File Issues',
        JOB_WAITING_FILE    => 'Waiting For files / Info',
        JOB_DESIGN_PROOFING => 'Design Proofing',
        JOB_IN_PRODUCTION   => 'In Production',
        JOB_REPRINT     => 'Reprint',
        JOB_SHIPPED     => 'Shipped',
        JOB_COMPLETED   => 'Completed',
        JOB_REFUNDED    => 'Refunded',
    );
    
    protected static function boot() {
        parent::boot();

        static::deleting(function($order) { // before delete() method call this
             $order->options()->delete();
             $order->files()->delete();
             
             OrderItemDesignInfo::where('item_id', $item->id)->delete();
        });
    }

    /**
     * get files of order item
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function files()
    {
        return $this->hasMany('App\Models\OrderItemFile', 'item_id');
    }

    /**
     * get files of order item by target(this is used for designs)
     *
     * @param int $target
     * @return mixed
     */
    public function filesBy($target=0)
    {
        return OrderItemFile::where('item_id', $this->id)
            ->where('target', $target)
            ->get();
    }

    /**
     * get features of order item
     *
     * @return mixed
     */
    public function features()
    {
        return OrderItemOption::where('item_id', $this->id)
            ->groupBy('feature_id')
            ->orderBy('feature_sort')
            ->get();
    }

    /**
     * get options of order item
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany('App\Models\OrderItemOption', 'item_id');
    }

    /**
     * get order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }

    /**
     * get order by reference_order_id
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referenceOrder()
    {
        return $this->belongsTo('App\Models\Order', 'reference_order_id');
    }

    /**
     * get design info from item_id
     *
     * @return mixed
     */
    public function designInfo()
    {
        return OrderItemDesignInfo::where('item_id', $this->id)->first();
    }
    
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    /**
     * get stuff info
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stuff()
    {
        return $this->belongsTo('App\Models\Admin', 'job_stuff_id');
    }
    
    public function assigner()
    {
        return $this->belongsTo('App\Models\Admin', 'job_assigned_by');
    }

    /**
     * get formatted job number by string
     *
     * @return string
     */
    public function jobNumber()
    {
        return 'Job # ' . $this->job_number;
    }

    /**
     * get status by string
     *
     * @param bool $label
     * @return string
     */
    public function status_lang($label=false)
    {
        $lang = OrderItem::$JOB_STATUS_ARRAY[$this->job_status];
        
        $class = 'warning';
        switch($this->job_status)
        {
            case JOB_UNASSIGNED:
            default:
                $class = 'warning';
                break;
            case JOB_WORKING:
                $class = 'success';
                break;
            case JOB_FILE_ISSUE:
                $class = 'danger';
                break;
            case JOB_WAITING_FILE:
                $class = 'danger';
                break;
            case JOB_DESIGN_PROOFING:
                $class = 'primary';
                break;
            case JOB_IN_PRODUCTION:
                $class = 'success';
                break;
            case JOB_SHIPPED:
                $class = 'success';
                break;
            case JOB_COMPLETED:
                $class = 'success';
                break;
            case JOB_REFUNDED:
                $class = 'none';
                break;
            case JOB_REPRINT:
                $class = 'warning';
                break;
        }
        
        if($label == false) return $lang;
        
        return "<label class='text-$class' style='margin-bottom:0;'>$lang</label>";
    }
    
    public static function statusArray($isDesign = false)
    {
        if($isDesign == false)
        {
            return array(
                //JOB_UNASSIGNED  => 'Unassigned',
                JOB_WORKING     => 'Working',
                JOB_FILE_ISSUE  => 'Design File Issues',
                JOB_WAITING_FILE    => 'Waiting For files / Info',
                JOB_DESIGN_PROOFING => 'Design Proofing',
                JOB_IN_PRODUCTION   => 'In Production',
                JOB_REPRINT     => 'Reprint',
                JOB_SHIPPED     => 'Shipped',
                JOB_COMPLETED   => 'Completed',
                JOB_REFUNDED      => 'Refund',
            );
        }
        else
        {
            return array(
                //JOB_UNASSIGNED  => 'Unassigned',
                JOB_WORKING     => 'Working',
                JOB_FILE_ISSUE  => 'Design File Issues',
                JOB_WAITING_FILE    => 'Waiting For files / Info',
                JOB_DESIGN_PROOFING => 'Design Proofing',
                JOB_IN_PRODUCTION   => 'In Production',
                JOB_REPRINT     => 'Reprint',
                JOB_COMPLETED   => 'Completed',
                JOB_REFUNDED      => 'Refund',
            );
        }
    }

    /**
     * get tracking method name by string
     *
     * @return string
     */
    public function jobTrackingMethodName() 
    {
        $result = 'Invalid';
        switch($this->job_tracking_method)
        {
            case SHIP_BY_FEDEX:
                $result = 'Fedex';
                break;
            case SHIP_BY_CA_POST:
                $result = 'Canada Post';
                break;
            case SHIP_BY_UPS:
                $result = 'UPS';
                break;        
        }
        
        return $result;
    }

    /**
     * get tracking url
     *
     * @return mixed
     */
    public function jobTrackingUrl()
    {
        $result = '';
        switch($this->job_tracking_method)
        {
            case SHIP_BY_FEDEX:
                $result = 'http://www.fedex.com/Tracking?action=track&tracknumbers=%s';
                break;
            case SHIP_BY_CA_POST:
                $result = 'http://www.canadapost.ca/cpotools/apps/track/personal/findByTrackNumber?trackingNumber=%s&amp;LOCALE=en';
                break;
            case SHIP_BY_UPS:
                $result = 'http://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=1Z%s';
                break;        
        }  
        
        return sprintf($result, $this->job_tracking_number);  
    }

    /**
     * generate new job number
     *
     * @return int
     */
    public static function newJobNumber()
    {
        $result = self::max('job_number');
        
        if($result == 0) $result = 100000;
        
        $result++;
        return $result;  
    }

    /**
     * get feature options
     *
     * @param $featureId
     * @return mixed
     */
    public function featureOptions($featureId)
    {
        return OrderItemOption::where('item_id', $this->id)
            ->where('feature_id', $featureId)
            ->orderBy('side_type')
            ->get();   
    }

    /**
     * check if item has custom sets
     *
     * @return bool
     */
    public function hasCustomSets()
    {
        $result = unserialize($this->custom_sets);
        if(count($result) > 0) return true;
        
        return false;
    }

    /**
     * get custom sets info
     *
     * @return mixed
     */
    public function customSets()
    {
        return unserialize($this->custom_sets);
    }

    /**
     * increase purchased count
     */
    public function increasePurchase()
    {
        if($this->product_type == PRODUCT_TEMPLATE)
        {
            $product = CardTemplate::find($this->product_id);
            if(isset($product->id))
            {
                $product->purchased = $product->purchased + 1;
                $product->save();
            }
        }
    }

    /**
     * check if item can be reordered
     *
     * @return bool
     */
    public function availableReorder()
    {
        $result = false;
        if($this->product_type == PRODUCT_DESIGN)
            $result = DesignPackage::available($this->product_id);
        else if($this->product_type == PRODUCT_TEMPLATE)
            $result = CardTemplate::available($this->product_id);
        else if($this->product_type == PRODUCT_CARD)
            $result = Card::available($this->product_id);
        
        return $result;
    }

    /**
     * update item status as completed
     */
    public function saveAsCompleted()
    {
        $this->job_status = JOB_COMPLETED; 
        $this->job_updated = date('Y-m-d H:i:s');   
        $result = $this->save();
        
        //check if other items are completed
        if($result && $this->order->canComplete())
        {
            $this->order->saveAsCompleted();
        }
        
        return $result;
    }
    
    public function saveAsRefunded()
    {
        $this->job_status = JOB_REFUNDED; 
        $this->job_updated = date('Y-m-d H:i:s');          
        $result = $this->save();
        
        //check if other items are completed
        if($result && $this->order->canComplete())
        {
            if($this->order->canTurnAsRefunded())
                $this->order->saveAsRefunded();
            else
                $this->order->saveAsCompleted();
        }
        
        return $result;
    }
    
    public function saveAsWorking($stuffId, $assignerId)
    {
        $curTime = date('Y-m-d H:i:s');
        
        $this->job_stuff_id = $stuffId;
        $this->job_assigned_time= $curTime;
        $this->job_assigned_by  = $assignerId;
        $this->job_updated  = $curTime;
        $this->job_status   = JOB_WORKING;
        $result = $this->save();    
        
        //check if other items are completed
        if($result && $this->order->status != ORDER_PROCESSING)
        {
            $this->order->saveAsProgressing();
        }
        
        return $result;
    }
}
