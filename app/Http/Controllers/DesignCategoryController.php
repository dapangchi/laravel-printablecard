<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Libraries\MyCart;
use App\Models\Card;
use App\Models\Design;
use App\Models\DesignPackage;
use App\Models\Service;
use App\Models\LogoSample;

use Input, Validator;
class DesignCategoryController extends FrontController {

    public function total()
    {    
        $service = Service::find(SVC_DESIGN_SERVICE);
        
        //get homepage sliders
        $rows = Design::orderBy('name')->get();
        
        $this->page_title = 'Design Services';
        return $this->view('catalog.design.category.index', compact('rows', 'service'));
    }
    
    public function show($slug)
    {
        $row = Design::where('slug', $slug)->first();
        
        $this->page_title = $row->name;
        return $this->view('catalog.design.category.show', compact('row'));
    }
    
    public function upload()
    {
        if(!Input::has('design-package'))
        {
            if(($saved = MyCart::hasSavedDesign()) === false)
            {
                return redirect('/');     
            }
            else
            {
                //set post values from session
                if(is_array($saved) && isset($saved['design-package']))
                {
                    Input::replace($saved);
                }                
            }
        }   
        
        //validate posts
        $rules = [
            'agree' => 'required', 
            'design-package' => 'required'
        ];
        
        $messages = [
            'agree.required' => 'Please check terms of design servie to proceed.',
            'design-package.required' => 'Please select one of design service to proceed.',
        ];
        
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $productId = Input::get('design-package');
        $product = DesignPackage::find($productId);
        if(!isset($product->id))
        {
            Template::set_message(trans('msg.has_error'), 'danger');
            return redirect('/');
        }
        
        //save posted options to session
        $data = [
            'agree'         => 1,
            'design-package'=> $productId,
            'reference_order_id' => Input::get('reference_order_id')
        ];
        MyCart::saveDesign($data);
        
        //get logo samples
        $logos = LogoSample::orderBy('name')->get();
        
        //get all cards
        $cards = Card::where('service_id', SVC_BUSINESS_CARD)
            ->lists('name', 'id')
            ->toArray();
        $cards = array('' => 'Please select product') + $cards;
        
        $this->page_title = 'Design Description';
        if($product->design->require_logo_design == YES)
            return $this->view('catalog.design.category.upload', compact('product', 'logos', 'cards')); 
        else
            return $this->view('catalog.design.category.upload_nologo', compact('product', 'cards')); 
    }
}