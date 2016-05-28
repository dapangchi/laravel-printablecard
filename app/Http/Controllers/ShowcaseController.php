<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\FrontController;
use App\Models\Showcase;
use App\Models\ShowcaseTag;
use App\Models\Card;
use App\Models\Tag;

use Request;
class ShowcaseController extends FrontController {

    private $_pageLimit = 9;
    
    public function business()
    {    
        //get all cards
        $cards = Card::where('service_id', SVC_BUSINESS_CARD)
            ->orderBy('name')
            ->get();
        
        //get all tags
        $tags = Tag::where('type', 2)
            ->orderBy('name')
            ->get(); 
         
        //get where conditions
        $instance = $this->_getInstance(DESIGN_SHOWCASE_BUSINESS);
        $showcases= $instance->orderBy('name')
            ->paginate($this->_pageLimit);
        
        $this->page_title = 'Business Card Design Browsing';
        $this->data['sub_title'] = 'BUSINESS CARD DESIGN GALLERY';
        $this->data['base_route']= 'showcase.business.list';
        return $this->view('catalog.showcase.list', compact('showcases', 'cards', 'tags'));
    }
    
    public function invitation()
    {    
        //get all cards
        $cards = Card::where('service_id', SVC_INVITATION_CARD)
            ->orderBy('name')
            ->get();
        
        //get all tags
        $tags = Tag::where('type', 2)
            ->orderBy('name')
            ->get(); 
        
        //get where conditions
        $instance = $this->_getInstance(DESIGN_SHOWCASE_INVITATION);
        $showcases= $instance->orderBy('name')
            ->paginate($this->_pageLimit);
             
        $this->page_title = 'Invitation Card Design Browsing';
        $this->data['sub_title'] = 'INVITATION CARD DESIGN GALLERY';
        $this->data['base_route']= 'showcase.invitation.list';
        return $this->view('catalog.showcase.list', compact('showcases', 'cards', 'tags'));
    }
    
    public function show()
    {
        $slug = Request::segment(2);
        
        $product = Showcase::where('slug', $slug)->first();
                                    
        $this->page_title = $product->name;
        return $this->view('catalog.showcase.show', compact('product'));
    }
    
    private function _getInstance($serviceType)
    {
        //get where conditions
        $instance = null;
        if(Request::has('card'))
        {
            //get card by slug at first
            $card = Card::findBySlug(Request::get('card'));
            $cardId = isset($card->id) ? $card->id : 0;
            
            //get templates by card type
            $instance = Showcase::where('showcase_type', $serviceType)
                ->where('card_id', $cardId);
        }
        else if(Request::has('tag'))
        {
            //get templates by tag
            $cardIds = array();
            $tag = Request::get('tag');
            $tagRow = Tag::where('name', $tag)->first();
            if(isset($tagRow->id))
            {
                $cardIds = ShowcaseTag::where('tag_id', $tagRow->id)
                    ->groupBy('showcase_id')
                    ->lists('showcase_id');
            }
            
            $instance = Showcase::where('showcase_type', $serviceType)
                ->whereIn('id', $cardIds);
        }
        else
        {
            //without condition
            $instance = Showcase::where('showcase_type', $serviceType);
        }
        
        return $instance;
    }
}