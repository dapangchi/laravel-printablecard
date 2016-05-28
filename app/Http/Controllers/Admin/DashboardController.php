<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Core\AdminController;  

class DashboardController extends AdminController 
{
    protected $page_title = 'Dashboard';
    
    public function __construct()
    { 
        parent::__construct();   
    }
    
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {             
        return $this->view('dashboard.index');
    }

}