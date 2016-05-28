<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\FrontController;
class ExceptionController extends FrontController {

    public function pageNotFound()
    {    
        //$this->page_title = 'Home';
        $this->page_title = 'Page not found';
        return $this->view('errors.404');
    }
    
    public function somethingWrong()
    {    
        //$this->page_title = 'Home';
        $this->page_title = 'Error';
        return $this->view('errors.wrong');
    }
}