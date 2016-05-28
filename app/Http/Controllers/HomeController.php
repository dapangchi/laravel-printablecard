<?php

namespace App\Http\Controllers;
                              
use App\Http\Controllers\Core\FrontController;
use App\Models\HomeSlider;

class HomeController extends FrontController {

    public function index()
    {
        //get homepage sliders
        $homesliders = HomeSlider::orderBy('sort', 'asc')->get();
         
        //$this->page_title = 'Home';
        return $this->view('home.index', compact('homesliders'));
    }
}