<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class CardTemplate extends Model implements SluggableInterface
{
    use SluggableTrait;
    
    protected $table = 'templates';  
        
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
        'on_update'  => true,
    ]; 
    
    protected static function boot() {
        parent::boot();

        static::deleting(function($template) { // before delete() method call this
            $template->images()->delete();
            $template->options()->delete();
            $template->rtags()->delete();
        });
    }
    
    /**
    * get base card
    * 
    */
    public function card()
    {
        return $this->belongsTo('App\Models\Card', 'card_id');
    } 
    
    /**
    * get template main image
    * 
    */
    public function image()
    {
        $row = CardTemplateImage::where('template_id', $this->id)->where('main', 1)->first();
        if(!isset($row->image)) return '';
        
        return $row->image;
    }
    
    /**
    * get template images
    * 
    */
    public function images()
    {
        return $this->hasMany('App\Models\CardTemplateImage', 'template_id')->orderBy('sort');
    }
    
    public function imagesSorted()
    {
        return CardTemplateImage::where('template_id', $this->id)
            ->orderBy('sort')
            ->get();
    }
    
    /**
    * get template features
    * 
    */
    public function features()
    {
        return CardTemplateOption::select('card_features.*')
            ->where('template_id', $this->id)
            ->join('card_features', 'card_features.id', '=', 'template_options.card_feature_id')
            ->groupBy('card_feature_id')
            ->orderBy('card_features.sort')
            ->get();
    }
    
    /**
    * get template options by feature
    * 
    * @param mixed $featureId
    */
    public function featureOptions($featureId, $sideType=0)
    {
        return CardTemplateOption::selectRaw('card_options.*, template_options.side_type')
            ->where('template_id', $this->id)
            ->where('card_feature_id', $featureId)
            //->where('side_type', $sideType)
            ->join('card_options', 'card_options.id', '=', 'template_options.card_option_id')
            ->orderBy('side_type')
            ->orderBy('card_options.sort')
            ->get();    
    }
    
    /**
    * get template options
    * 
    */
    public function options()
    {
        return $this->hasMany('App\Models\CardTemplateOption', 'template_id');
    } 
    
    /**
    * get template base price 
    * sum all options' prices
    * 
    */
    public function basePrice($quantityId)
    {
        $price = 0;
        $percent = 0;
        foreach($this->options as $row)
        {
            if(!isset($row->option->id)) continue;
            
            if($row->option->price_type == PRICE_FIXED) $price += CardPrice::price($this->card_id, $quantityId, $row->card_feature_id, $row->card_option_id);
            else $percent += CardPrice::price($this->card_id, $quantityId, $row->card_feature_id, $row->card_option_id);
        }

        $price += $price * $percent / 100;
        return $price; 
    }
    
    /**
    * get all tags for this template
    * 
    */
    public function tags()
    {
        return CardTemplateTag::select('tags.*')
            ->join('tags', 'tags.id', '=', 'template_tags.tag_id')
            ->where('template_id', $this->id)
            ->lists('name');
            
    }
    
    public function rtags()
    {
        return $this->hasMany('App\Models\CardTemplateTag', 'template_id');
    }
    
    /**
    * get latest template id like str
    * extract suffix number from string
    * ex: template-card-0012 -> 12
    * 
    * @param mixed $str
    */
    public static function getLastTemplateID($str, $id=0)
    {
        $result = self::where('template_uid', 'like', $str . "-____")
            ->max('template_uid');
        
        $result = substr($result, -4, 4);
        return (int)filter_var($result, FILTER_SANITIZE_NUMBER_INT);
    }
    
    public function getPrefix()
    {
        if($this->service_id == SVC_BUSINESS_TEMPLATE)
        {
            return 'business-card-templates';
        }
        else
        {
            return 'invitation-card-templates';
        }
    }     
    
    public function getUri()
    {
        $prefix = $this->getPrefix();
        return $prefix . '/' . $this->slug;   
    }
    
    public function getUploadUri()
    {
        return $this->getUri() . '/file-upload'; 
    }
    
    public function getUpdatePriceUri()
    {
        return $this->getUri() . '/ajaxUpdatePrice';
    }
    
    public function getUrl()
    {
        return url($this->getUri());
    }
    
    public function getUploadUrl()
    {
        return url($this->getUploadUri());
    }
    
    public function getUpdatePriceUrl()
    {
        return url($this->getUpdatePriceUri());
    }
    
    public static function getSearchUrl($type, $params = array())
    {
        $uri = '';
        if($type == SVC_BUSINESS_TEMPLATE) $uri = 'business-card-templates';
        else $uri = 'invitation-card-templates';
        
        if(!empty($params))
        {
            $suffix = '';
            foreach($params as $key => $val)
            {
                $suffix .= "$key=$val";
            }
            
            $uri .= '?' . $suffix;
        }
        
        return url($uri);
    }

    public function getPromotionDiscount()
    {
        $currentDate = date('Y-m-d');

        if($this->promotion_start_date >= $currentDate && $this->promotion_end_date >= $currentDate)
        {
            return min($this->promotion_percent, 100);
        }

        return 0;
    }
    
    public static function available($id)
    {
        $row = self::find($id);
        if(!isset($row->id)) return false;
        
        if(!isset($row->card->id)) return false;
        
        return true;
    }
}
