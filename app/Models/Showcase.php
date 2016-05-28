<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Showcase extends Model implements SluggableInterface
{
    use SluggableTrait;
    
    protected $table = 'showcases';  
        
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
        $row = ShowcaseImage::where('showcase_id', $this->id)->where('main', 1)->first();
        if(!isset($row->image)) return '';
        
        return $row->image;
    }
    
    /**
    * get template images
    * 
    */
    public function images()
    {
        return $this->hasMany('App\Models\ShowcaseImage', 'showcase_id')->orderBy('sort');
    }
    
    /**
    * get template features
    * 
    */
    public function features()
    {
        return ShowcaseOption::select('card_features.*')
            ->where('showcase_id', $this->id)
            ->join('card_features', 'card_features.id', '=', 'showcase_options.card_feature_id')
            ->groupBy('card_feature_id')
            ->orderBy('card_features.sort')
            ->get();
    }
    
    /**
    * get template options by feature
    * 
    * @param mixed $featureId
    */
    public function featureOptions($featureId)
    {
        return ShowcaseOption::selectRaw('card_options.*, side_type')
            ->where('showcase_id', $this->id)
            ->where('card_feature_id', $featureId)
            ->join('card_options', 'card_options.id', '=', 'showcase_options.card_option_id')
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
        return $this->hasMany('App\Models\ShowcaseOption', 'showcase_id');
    } 
    
    /**
    * get all tags for this template
    * 
    */
    public function tags()
    {
        return ShowcaseTag::select('tags.*')
            ->join('tags', 'tags.id', '=', 'showcase_tags.tag_id')
            ->where('showcase_id', $this->id)
            ->lists('name');
            
    }
    
    public function rtags()
    {
        return $this->hasMany('App\Models\ShowcaseTag', 'showcase_id');
    }
    
    public function getPrefix()
    {
        if($this->showcase_type == DESIGN_SHOWCASE_BUSINESS) return "business-card-design-browsing";
        else return "invitation-card-design-browsing";
    }
    
    public function getUri()
    {
        return $this->getPrefix() . "/$this->slug";
    }
    
    public function getUrl()
    {
        return url($this->getUri());
    }
    
    public static function getSearchUrl($type, $params = array())
    {
        $uri = '';
        if($type == DESIGN_SHOWCASE_BUSINESS) $uri = 'business-card-designcase-browsing';
        else $uri = 'invitation-card-designcase-browsing';
        
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
}
