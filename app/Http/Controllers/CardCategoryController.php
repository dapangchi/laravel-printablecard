<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\FrontController;
use App\Models\CardCategory;
use App\Models\Service;

use Request;
class CardCategoryController extends FrontController {

    public function businessCard()
    {    
        $service = Service::find(SVC_BUSINESS_CARD);
        
        //get homepage sliders
        $categories = CardCategory::where('service_id', SVC_BUSINESS_CARD)
            ->orderBy('name')
            ->get();
        
        $this->page_title = 'ALL BUSINESS CARDS PRODUCTS';
        $this->data['sub_title'] = 'ALL BUSINESS CARDS PRODUCTS';
        return $this->view('catalog.card.category.index', compact('categories', 'service'));
    }
    
    public function invitationCard()
    {    
        $service = Service::find(SVC_INVITATION_CARD);
        
        //get homepage sliders
        $categories = CardCategory::where('service_id', SVC_INVITATION_CARD)
            ->orderBy('name')
            ->get();
        
        $this->page_title = 'ALL INVITATION CARDS PRODUCTS';
        $this->data['sub_title'] = 'ALL INVITATION CARDS PRODUCTS';
        return $this->view('catalog.card.category.index', compact('categories', 'service'));
    }
    
    public function show()
    {
        $slug = Request::segment(1);
        $category = CardCategory::where('slug', $slug)->first();
        
        $this->page_title = $category->name;
        return $this->view('catalog.card.category.show', compact('category'));
    }      
}