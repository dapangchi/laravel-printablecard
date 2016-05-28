<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Country;
use App\Models\Region;
use App\Models\TaxZone;
use Input, Validator, Redirect;

class TaxZoneController extends AdminController {

    protected $menu = 'sales';
    protected $page = 'taxzone';
    
    protected $list_route = 'admin.sales.taxzone.list';    
    public function __construct()
    {
        parent::__construct();
        
        $this->restrict('sales.setting.view');
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function index()
    {
        $rows = TaxZone::orderBy('id', 'desc')->get();
        
        return $this->view('sales.taxzone.index', compact('rows'));   
    }
    
    public function create()
    {
        // Get Country List
        $countries = Country::orderBy('sort')
            ->orderBy('name')
            ->lists('name', 'id');
        
        return $this->view('sales.taxzone.create', compact('countries'));
    }
    
    public function edit($id)
    {
        $row = TaxZone::find($id);
        
        // Get Country List
        $countries = Country::orderBy('sort')
            ->orderBy('name')
            ->lists('name', 'id');
        
        $regions = Region::orderBy('name')
            ->lists('name', 'id');
        
        return $this->view('sales.taxzone.edit', compact('row', 'countries', 'regions'));
    }
    
    public function delete($id)
    {
        $this->restrict('sales.setting.manage');
        
        $row = TaxZone::destroy($id);
        
        Template::set_message('TaxZone has been removed.', 'warning');
        
        return redirect($this->listUrl());
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function store($id = 0)
    {                  
        $this->restrict('sales.setting.manage');
                      
        //validate posts
        $rules = [
            'country'   => "required", 
            'region'    => "required", 
            'tax'       => "required|numeric|min:0",
        ];     
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $row = null;
        if($id == 0)
        {
            $row = new TaxZone;
        }
        else
        {
            $row = TaxZone::find($id);
        }
        
        // Update row
        $row->country_id = Input::get('country');
        $row->region_id = Input::get('region');
        $row->tax = Input::get('tax');
        $status = $row->save();
        
        // Set update message
        if($status)
        {
            if($id == 0)
                Template::set_message('New TaxZone is added.', 'success');
            else
                Template::set_message('TaxZone is updated.', 'success');
        }
        else
        {
            Template::set_message(trans('msg.has_error'), 'danger');
        }
        
        return Redirect::route('admin.sales.taxzone.edit', $row->id);
    }
     
}