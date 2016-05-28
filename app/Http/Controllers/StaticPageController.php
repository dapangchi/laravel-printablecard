<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Models\CardCategory;
use App\Models\Card;
use App\Models\CardTemplate;
use App\Models\Showcase;
use App\Models\Design;
use Input, Validator, Mail, Redirect, App;

class StaticPageController extends FrontController 
{
    public function __construct()
    {
        parent::__construct(); 
    }
    
    public function corporateOrders()
    {
        $this->page_title = 'Corporate Orders';
        $this->page_class = 'corporate-orders-page';
        return $this->view('static.corporateOrders');
    }
    
    public function newsletterConfirm()
    {
        $this->page_title = 'Sign Up Success';
        $this->page_class = 'sign-up-page';
        return $this->view('static.newsletterConfirm');
    }   
    
    public function thankyou()
    {
        $this->page_title = 'Thanks for subscription';
        $this->page_class = 'sign-up-page';
        return $this->view('static.thankyou');
    }    
    
    public function privacy()
    {
        $this->page_title = 'Privacy Policy';
        $this->page_class = 'sign-up-page';
        return $this->view('static.privacy');
    } 
    
    public function terms()
    {
        $this->page_title = 'Terms & Conditions';
        $this->page_class = 'sign-up-page';
        return $this->view('static.terms');
    } 
    
    public function about()
    {
        $this->page_title = 'About Us';
        $this->page_class = 'corporate-orders-page';
        return $this->view('static.about');
    }
    
    public function promotion()
    {
        $this->page_title = 'Promotion';
        $this->page_class = '';
        return $this->view('static.promotion');
    }
       
    public function postCorporateOrders()
    {
        //validate posts
        $rules = [
            'corporate-orders-name'         => 'required',
            'corporate-orders-email'        => 'required',
            'corporate-orders-phone-number' => 'required',
            'corporate-orders-company-name' => 'required',
            'corporate-orders-sets-numb'    => 'required',
            'corporate-orders-cards-sets'   => 'required',
            'corporate-orders-product-interest' => 'required',
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $data = [
            'name'  => Input::get('corporate-orders-name'),
            'email' => Input::get('corporate-orders-email'),
            'phone' => Input::get('corporate-orders-phone-number'),
            'company'   => Input::get('corporate-orders-company-name'),
            'sets'  => Input::get('corporate-orders-sets-numb'),
            'cards' => Input::get('corporate-orders-cards-sets'),
            'interest' => Input::get('corporate-orders-product-interest'),
        ];
        
        $this->sendMail('emails.quotation', $this->settings['email.saler_email'], $this->settings['email.saler_name'], $data, Input::get('corporate-orders-name'));
        /*$this->to_email = 'sales@rockdesign.com';
        $this->to_name = 'Sales Manager';
        $this->mail_subject = Input::get('corporate-orders-name');
        Mail::send('emails.quotation', $data, function($message) 
        {
            $message->from($this->settings['email.sender_email'], $this->settings['email.sender_name'])
                ->to($this->to_email, $this->to_name)
                ->subject($this->mail_subject);
        });*/
        
        Template::set_message('Your quotation is sent to our sales manager.', 'success');
        
        return Redirect::route('page.corporate.orders');
    }
    
    public function sitemap()
    {
        // create new sitemap object
        $sitemap = App::make("sitemap");

        // set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
        // by default cache is disabled
        //$sitemap->setCache('laravel.sitemap', 60);
          
        // check if there is cached sitemap and build new only if is not
        //if (!$sitemap->isCached())
        {
            //add card categories
            $sitemap->add(route('card.category.business'), '2016-02-18', '0.5', 'daily');
            $sitemap->add(route('card.category.invitation'), '2016-02-18', '0.5', 'daily');
            
            $sitemap->add(route('design.category.all'), '2016-02-18', '0.5', 'daily');
            
            
            foreach(CardCategory::all() as $row)
            {                       
                $images = array();
                $images[] = array(
                    'url'   => url($row->image),
                    'title' => $row->name,
                    'caption' => $row->name
                );
                
                $sitemap->add($row->getUrl(), $row->updated_at, '1.0', 'daily', $images);
            }     
            
            //add cards
            foreach(Card::all() as $row)
            {     
                $images = array();
                foreach($row->images as $img)
                {
                    $images[] = array(
                        'url'   => url($img->image),
                        'title' => $row->name,
                        'caption' => $row->name
                    );
                }
                
                $sitemap->add($row->getUrl(), $row->updated_at, '1.0', 'daily', $images);
            }
            
            //add Template
            $sitemap->add(route('template.product.business'), '2016-02-18', '0.5', 'daily');
            $sitemap->add(route('template.product.invitation'), '2016-02-18', '0.5', 'daily');
            
            foreach(CardTemplate::all() as $row)
            {
                $images = array();
                foreach($row->images as $img)
                {       
                    $images[] = array(
                        'url'   => url($img->image),
                        'title' => $row->name,
                        'caption' => $row->name
                    );
                }
                
                $sitemap->add($row->getUrl(), $row->updated_at, '1.0', 'daily', $images);
            }
            
            //add designs
            $sitemap->add(route('design.category.all'), '2016-02-18', '0.5', 'daily');
            foreach(Design::all() as $row)
            {
                $images = array();
                foreach($row->slide->images as $img)
                {       
                    $images[] = array(
                        'url'   => url($img->image),
                        'title' => $row->name,
                        'caption' => $row->name
                    );
                }
                $sitemap->add(url('design-services/'.$row->slug), $row->updated_at, '1.0', 'daily', $images);
            }
            
            //add showcase
            $sitemap->add(route('showcase.business.list'), '2016-02-18', '0.5', 'daily');
            $sitemap->add(route('showcase.invitation.list'), '2016-02-18', '0.5', 'daily');
            
            foreach(Showcase::all() as $row)
            {
                $images = array();
                foreach($row->images as $img)
                {       
                    $images[] = array(
                        'url'   => url($img->image),
                        'title' => $row->name,
                        'caption' => $row->name
                    );
                }
                $sitemap->add($row->getUrl(), $row->updated_at, '1.0', 'daily', $images);
            } 
            
            //add static pages
            $sitemap->add(route('page.corporate.orders.html'), '2016-02-18', '0.1', 'montly');
            $sitemap->add(route('page.privacy.html'), '2016-02-18', '0.1', 'montly');
            $sitemap->add(route('page.terms.html'), '2016-02-18', '0.1', 'montly');
            $sitemap->add(route('page.about.html'), '2016-02-18', '0.1', 'montly');
        }
        
        // generate your sitemap (format, filename)
        return $sitemap->render('xml');
        // this will generate file mysitemap.xml to your public folder
    }
}