<?php

use App\Models\Card;    
use App\Models\CardCategory;
use App\Models\CardTemplate;
use App\Models\Showcase;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Validators
Validator::extend('check_current_password', 'CustomValidation@check_current_password');

// Patterns
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[0-9a-z-_]+');  

// Frontend Routes
{
    // Site Routes
    Route::get('/',     'HomeController@index');
    Route::get('test',  'TestController@index');

    // Common
    Route::get('common/getTags',            'CommonController@getTags');
    Route::post('common/getRegions',        'CommonController@getRegions');
    Route::post('common/changeCurrency',    'CommonController@changeCurrency');

    Route::post('fileupload/slide',         'UploadController@slide');
    Route::post('fileupload/card',          'UploadController@card');
    Route::post('fileupload/template',      'UploadController@template');
    Route::post('fileupload/showcase',      'UploadController@showcase');
    Route::post('fileupload/design',        'UploadController@design');
    Route::post('fileupload/homeslider',    'UploadController@homeslider');
    Route::post('fileupload/design_file',   'UploadController@design_file');
    Route::post('fileupload/icon',          'UploadController@icon');
    
    // Image
    Route::get('image/card/{id}',       ['as' => 'card.image',      'uses' => 'ImageController@card']);
    Route::get('image/template/{id}',   ['as' => 'card.template',   'uses' => 'ImageController@template']);
    Route::get('image/showcase/{id}',   ['as' => 'card.showcase',   'uses' => 'ImageController@showcase']);

    // Auth
    Route::get('auth/login',            ['as' => 'customer.login', 'uses' => 'AuthController@login']);
    Route::post('auth/postLogin',       ['as' => 'customer.login.post', 'uses' => 'AuthController@postLogin']);
    Route::get('auth/logout',           ['as' => 'customer.logout', 'uses' => 'AuthController@logout']);
    Route::get('auth/register',         ['as' => 'customer.register', 'uses' => 'AuthController@register']);
    Route::post('auth/postRegister',    ['as' => 'customer.register.post', 'uses' => 'AuthController@postRegister']);
    Route::get('auth/forgot-password',  ['as' => 'customer.forgot', 'uses' => 'AuthController@forgotPassword']);
    Route::post('auth/postForgotPassword',      ['as' => 'customer.forgot.post', 'uses' => 'AuthController@postForgotPassword']);
    Route::get('auth/reset-password/{token?}',  ['as' => 'customer.reset', 'uses' => 'AuthController@resetPassword']);
    Route::post('auth/postResetPassword',       ['as' => 'customer.reset.post', 'uses' => 'AuthController@postResetPassword']);

    Route::post('auth/ajaxLogin',           ['as' => 'customer.ajax.login', 'uses' => 'AuthController@ajaxLogin']);
    Route::post('auth/ajaxCheckEmail',      ['as' => 'customer.ajax.check.email', 'uses' => 'AuthController@ajaxCheckEmail']);
    Route::get('auth/register-success',     ['as' => 'customer.register.success', 'uses' => 'AuthController@registerSuccess']);
    Route::get('auth/register-complete',    ['as' => 'customer.register.complete', 'uses' => 'AuthController@registerComplete']);
    Route::post('auth/postRegisterComplete',['as' => 'customer.register.complete.post', 'uses' => 'AuthController@postRegisterComplete']);

    Route::get('auth/facebook-reigster',            ['as' => 'customer.facebook.register', 'uses' => 'AuthController@registerWithFacebook']);
    Route::get('auth/facebook-reigster-callback',   ['as' => 'customer.facebook.register.callback', 'uses' => 'AuthController@registerCallbackFacebook']);

    // -- Account
    Route::any('customer',                      ['as' => 'customer.main', 'uses' => 'Customer\HomeController@index']);
    Route::any('customer/home',                 ['as' => 'customer.home', 'uses' => 'Customer\HomeController@index']);
    Route::get('customer/tracking',             ['as' => 'customer.tracking', 'uses' => 'Customer\TrackingController@index']);
    Route::get('customer/tracking/detail/{id}', ['as' => 'customer.tracking.detail', 'uses' => 'Customer\TrackingController@detail']);
    Route::get('customer/orders',               ['as' => 'customer.orders', 'uses' => 'Customer\OrderController@index']);
    Route::get('customer/orders/detail/{id}',   ['as' => 'customer.order.detail', 'uses' => 'Customer\OrderController@detail']);
    Route::get('customer/orders/invoice/{id}',  ['as' => 'customer.order.invoice', 'uses' => 'Customer\OrderController@invoice']);
    Route::get('customer/messages',             ['as' => 'customer.messages', 'uses' => 'Customer\MessageController@index']);
    Route::get('customer/setting',              ['as' => 'customer.setting', 'uses' => 'Customer\SettingController@index']);
    Route::get('customer/setting/account',      ['as' => 'customer.setting.account', 'uses' => 'Customer\SettingController@account']);
    Route::post('customer/setting/postAccount', ['as' => 'customer.setting.account.post', 'uses' => 'Customer\SettingController@postAccount']);
    Route::get('customer/setting/password',     ['as' => 'customer.setting.password', 'uses' => 'Customer\SettingController@password']);
    Route::post('customer/setting/postPassword',['as' => 'customer.setting.password.post', 'uses' => 'Customer\SettingController@postPassword']);
    Route::get('customer/setting/shipping',     ['as' => 'customer.setting.shipping', 'uses' => 'Customer\SettingController@shipping']);
    Route::get('customer/setting/billing',      ['as' => 'customer.setting.billing', 'uses' => 'Customer\SettingController@billing']);
    Route::post('customer/setting/postShipping',['as' => 'customer.setting.shipping.post', 'uses' => 'Customer\SettingController@postShipping']);
    Route::post('customer/setting/postBilling', ['as' => 'customer.setting.billing.post', 'uses' => 'Customer\SettingController@postBilling']);
    Route::post('customer/setting/updateDefaultShipping',   ['as' => 'customer.setting.update.default.shipping', 'uses' => 'Customer\SettingController@updateDefaultShipping']);
    Route::post('customer/setting/updateDefaultBilling',    ['as' => 'customer.setting.update.default.billing', 'uses' => 'Customer\SettingController@updateDefaultShipping']);
    Route::post('customer/setting/deleteShipping',          ['as' => 'customer.setting.delete.shipping', 'uses' => 'Customer\SettingController@deleteShipping']);
    Route::post('customer/setting/deleteBilling',           ['as' => 'customer.setting.delete.billing', 'uses' => 'Customer\SettingController@deleteBilling']);

    Route::get('customer/reorder/item/{id}', ['as' => 'reorder.item', 'uses' => 'Customer\ReorderController@item']);

    // -- Card & Card Category Page
    Route::get('business-cards',            ['as' => 'card.category.business',      'uses' => 'CardCategoryController@businessCard']);
    Route::get('invitation-cards',          ['as' => 'card.category.invitation',    'uses' => 'CardCategoryController@invitationCard']);
    Route::post('card/ajaxUpdatePrice',     ['as' => 'card.product.update.price',   'uses' => 'CardController@ajaxUpdatePrice']);  
    /*Route::get('card/file-upload',          ['as' => 'card.product.file.upload',    'uses' => 'CardController@upload']);
    Route::post('card/file-upload',         ['as' => 'card.product.file.upload',    'uses' => 'CardController@upload']);
    Route::get('cards/{slug}',              ['as' => 'card.category.show',          'uses' => 'CardCategoryController@show']);
    Route::get('card/{slug}',               ['as' => 'card.product.show',           'uses' => 'CardController@show']);*/

    // -- Business Catd Template Page
    Route::get('business-card-templates',   ['as' => 'template.product.business',   'uses' => 'TemplateController@business']);
    Route::get('invitation-card-templates', ['as' => 'template.product.invitation', 'uses' => 'TemplateController@invitation']);
    Route::post('template/ajaxUpdateSorting',['as' => 'template.product.update.sorting', 'uses' => 'TemplateController@ajaxUpdateSorting']);
    Route::get('post/{id?}',                ['as' => 'template.product.business.old',   'uses' => 'TemplateController@business']);

    // -- Design Page
    Route::get('design-services',           ['as' => 'design.category.all',         'uses' => 'DesignCategoryController@total']);
    Route::any('design-services/upload',    ['as' => 'design.category.upload',      'uses' => 'DesignCategoryController@upload']);
    Route::get('design-services/{slug}',    ['as' => 'design.category.show',        'uses' => 'DesignCategoryController@show']);

    // -- Design Showcase
    Route::get('design-showcase',               ['as' => 'showcase.business.list',      'uses' => 'ShowcaseController@business']);
    Route::get('invitation-card-designcase',    ['as' => 'showcase.invitation.list',    'uses' => 'ShowcaseController@invitation']);

    // -- Sample Pack
    Route::get('sample-packs.html', ['as' => 'page.sample.pack.html', 'uses' => 'SamplePackController@total']);
    Route::get('premium-sample-pack.html', ['as' => 'page.premium.pack.html', 'uses' => 'SamplePackController@premium']);
    Route::get('metal-sample-pack.html', ['as' => 'page.metal.pack.html', 'uses' => 'SamplePackController@metal']);
    Route::post('sample-packs/postRequest', ['as' => 'page.sample.pack.post', 'uses' => 'SamplePackController@postRequest']);
    Route::post('sample-packs/paypalIPNListener', ['as' => 'page.sample.pack.ipn', 'uses' => 'SamplePackController@paypalIPNListener']);

    // Cart    
    Route::get('cart',                      ['as' => 'cart.item.list',          'uses' => 'CartController@index']);
    Route::post('cart/addCard',             ['as' => 'cart.item.add.card',      'uses' => 'CartController@addCard']);
    Route::post('cart/addTemplate',         ['as' => 'cart.item.add.template',  'uses' => 'CartController@addTemplate']);
    Route::post('cart/addDesign',           ['as' => 'cart.item.add.design',    'uses' => 'CartController@addDesign']);
    Route::get('cart/remove/{id}',          ['as' => 'cart.item.remove',        'uses' => 'CartController@remove']);
    Route::get('cart/added',                ['as' => 'cart.item.add.success',   'uses' => 'CartController@added']);
    Route::get('cart/checkout',             ['as' => 'cart.checkout',           'uses' => 'CartController@checkout']);
    Route::any('cart/checkout/complete',    ['as' => 'cart.checkout.complete',  'uses' => 'CartController@complete']);
    Route::post('cart/checkout/purchase',   ['as' => 'cart.checkout.purchase',  'uses' => 'CartController@purchase']);
    Route::get('cart/checkout/purchaseCallbackPaypal',  ['as' => 'cart.checkout.purchase.paypal',  'uses' => 'CartController@purchaseCallbackPaypal']);
    Route::any('cart/checkout/paypalIPNListener',       ['as' => 'cart.checkout.paypal.ipn',       'uses' => 'CartController@paypalIPNListener']);

    Route::post('cart/ajaxApplyCoupon',     ['as' => 'cart.apply.coupon',       'uses' => 'CartController@ajaxApplyCoupon']);
    Route::post('cart/ajaxCancelCoupon',    ['as' => 'cart.cancel.coupon',      'uses' => 'CartController@ajaxCancelCoupon']);
    Route::post('cart/ajaxSetShipping',     ['as' => 'cart.set.shipping',       'uses' => 'CartController@ajaxSetShipping']);
    Route::post('cart/ajaxGetBilling',      ['as' => 'cart.get.billing',        'uses' => 'CartController@ajaxGetBilling']);
    Route::post('cart/ajaxSetBilling',      ['as' => 'cart.set.billing',        'uses' => 'CartController@ajaxSetBilling']);
    Route::post('cart/ajaxGetShipment',     ['as' => 'cart.get.shipment',       'uses' => 'CartController@ajaxGetShipment']);
    Route::post('cart/ajaxSetShipment',     ['as' => 'cart.set.shipment',       'uses' => 'CartController@ajaxSetShipment']);
    Route::post('cart/ajaxGetPayment',      ['as' => 'cart.get.payment',        'uses' => 'CartController@ajaxGetPayment']);
    Route::post('cart/ajaxSetPayment',      ['as' => 'cart.set.payment',        'uses' => 'CartController@ajaxSetPayment']);
    Route::post('cart/ajaxGetConfirm',      ['as' => 'cart.get.confirm',        'uses' => 'CartController@ajaxGetConfirm']);
    Route::post('cart/ajaxUpdateAddressFields', ['as' => 'cart.update.address.block', 'uses' => 'CartController@ajaxUpdateAddress']);

    // -- Page Page
    /*Route::get('page/{slug}',               ['as' => 'page.show',           'uses' => 'PageController@show']);
    Route::get('contact',                   ['as' => 'page.contact',        'uses' => 'PageController@contact']);
    Route::post('postContact',              ['as' => 'page.contact.post',   'uses' => 'PageController@postContact']);*/

    // --Static Pages     
    Route::get('corporate-orders',          ['as' => 'page.corporate.orders',       'uses' => 'StaticPageController@corporateOrders']);
    Route::get('corporate-orders.html',     ['as' => 'page.corporate.orders.html',  'uses' => 'StaticPageController@corporateOrders']);
    Route::post('postCorporateOrders',      ['as' => 'page.corporate.orders.post',  'uses' => 'StaticPageController@postCorporateOrders']);
    Route::get('newsletter-confirm',        ['as' => 'page.newsletter.confirm',     'uses' => 'StaticPageController@newsletterConfirm']);
    Route::get('newsletter-confirm.html',   ['as' => 'page.newsletter.confirm.html','uses' => 'StaticPageController@newsletterConfirm']);
    Route::get('thank-you.php',             ['as' => 'page.newsletter.thankyou',    'uses' => 'StaticPageController@thankyou']);
    Route::get('privacy',                   ['as' => 'page.privacy',                'uses' => 'StaticPageController@privacy']);
    Route::get('privacy.html',              ['as' => 'page.privacy.html',           'uses' => 'StaticPageController@privacy']);
    Route::get('terms',                     ['as' => 'page.terms',                  'uses' => 'StaticPageController@terms']);
    Route::get('terms.html',                ['as' => 'page.terms.html',             'uses' => 'StaticPageController@terms']);
    Route::get('about',                     ['as' => 'page.about',                  'uses' => 'StaticPageController@about']);
    Route::get('about.html',                ['as' => 'page.about.html',             'uses' => 'StaticPageController@about']);
    Route::get('promotion',                 ['as' => 'page.promotion',              'uses' => 'StaticPageController@promotion']);
    Route::get('promotion.html',            ['as' => 'page.promotion.html',         'uses' => 'StaticPageController@promotion']);

    Route::get('sitemap.xml',               ['as' => 'page.sitemap',                'uses' => 'StaticPageController@sitemap']);

    // -- Error Pages  
    Route::get('page-not-found',            ['as' => 'error.404',                   'uses' => 'ExceptionController@pageNotFound']);
    Route::get('error-occurred',            ['as' => 'error.wrong',                 'uses' => 'ExceptionController@somethingWrong']);
}

// Admin Routes
Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/', 'Admin\AuthController@index');
    
    // -- Auth
    Route::get('login',                     ['as' => 'admin.login',         'uses' => 'Admin\AuthController@login']);
    Route::post('postLogin',                ['as' => 'admin.login.post',    'uses' => 'Admin\AuthController@postLogin']);
    Route::get('logout',                    ['as' => 'admin.logout',        'uses' => 'Admin\AuthController@logout']);
    Route::get('forgot-password',           ['as' => 'admin.forgot',        'uses' => 'Admin\AuthController@forgotPassword']);
    Route::post('postForgotPassword',       ['as' => 'admin.forgot.post',   'uses' => 'Admin\AuthController@postForgotPassword']);
    Route::get('reset-password/{token?}',   ['as' => 'admin.reset',         'uses' => 'Admin\AuthController@resetPassword']);
    Route::post('postResetPassword',        ['as' => 'admin.reset.post',    'uses' => 'Admin\AuthController@postResetPassword']);
    
    // -- Account
    Route::get('account',                   ['as' => 'admin.profile',       'uses' => 'Admin\AccountController@index']);
    Route::post('account/postIndex',        ['as' => 'admin.profile.post',  'uses' => 'Admin\AccountController@postIndex']);
    
    // --Dashboard   
    Route::get('dashboard', ['as' => 'admin.dashboard', 'uses' => 'Admin\DashboardController@index']);
    
    // -- Setting
    Route::group(['prefix' => 'setting', 'as' => 'admin.setting.'], function () {
        
        // -- General
        Route::get('website',               ['as' => 'website',      'uses' => 'Admin\Setting\WebsiteController@index']);
        Route::post('website/postIndex',    ['as' => 'website.store','uses' => 'Admin\Setting\WebsiteController@postIndex']);
        
        // -- Email
        Route::get('email',                 ['as' => 'email',       'uses' => 'Admin\Setting\EmailController@index']);
        Route::post('email/postIndex',      ['as' => 'email.store', 'uses' => 'Admin\Setting\EmailController@postIndex']);
        
        // -- Sales
        Route::get('sales',                 ['as' => 'sales',       'uses' => 'Admin\Setting\SalesController@index']);
        Route::post('sales/postIndex',      ['as' => 'sales.store', 'uses' => 'Admin\Setting\SalesController@postIndex']);
        
        // -- Social
        Route::get('social',                ['as' => 'social',      'uses' => 'Admin\Setting\SocialController@index']);
        Route::post('social/postFacebook',  ['as' => 'social.store','uses' => 'Admin\Setting\SocialController@postFacebook']);
    });
    
    // -- Catalog
    Route::group(['prefix' => 'catalog'], function () {
        
        //Card
        Route::group(['prefix' => 'card', 'as' => 'admin.card.'], function () {
            //Business
            // -- Service
            Route::get('business/content',                   ['as' => 'business.content',         'uses' => 'Admin\Catalog\Card\BusinessContentController@index']);
            Route::post('business/content/store',            ['as' => 'business.content.store',   'uses' => 'Admin\Catalog\Card\BusinessContentController@store']);
            
            // -- Category
            Route::get('business/category',                  ['as' => 'business.category.list',   'uses' => 'Admin\Catalog\Card\BusinessCategoryController@index']);
            Route::get('business/category/create',           ['as' => 'business.category.create', 'uses' => 'Admin\Catalog\Card\BusinessCategoryController@create']);
            Route::get('business/category/edit/{id}',        ['as' => 'business.category.edit',   'uses' => 'Admin\Catalog\Card\BusinessCategoryController@edit']);
            Route::get('business/category/delete/{id}',      ['as' => 'business.category.delete', 'uses' => 'Admin\Catalog\Card\BusinessCategoryController@delete']);
            Route::post('business/category/store/{id?}',     ['as' => 'business.category.store',  'uses' => 'Admin\Catalog\Card\BusinessCategoryController@store']);            
            
            // -- Product
            Route::get('business/card',                     ['as' => 'business.product.list',     'uses' => 'Admin\Catalog\Card\BusinessCardController@index']);
            Route::get('business/card/create',              ['as' => 'business.product.create',   'uses' => 'Admin\Catalog\Card\BusinessCardController@create']);
            Route::get('business/card/edit/{id}',           ['as' => 'business.product.edit',     'uses' => 'Admin\Catalog\Card\BusinessCardController@edit']);
            Route::get('business/card/delete/{id}',         ['as' => 'business.product.delete',   'uses' => 'Admin\Catalog\Card\BusinessCardController@delete']);
            Route::post('business/card/store/{id?}',        ['as' => 'business.product.store',    'uses' => 'Admin\Catalog\Card\BusinessCardController@store']);
            Route::get('business/card/price/{id}',          ['as' => 'business.product.price',    'uses' => 'Admin\Catalog\Card\BusinessCardController@price']);
            Route::post('business/card/price/store/{id}',   ['as' => 'business.product.price.store',    'uses' => 'Admin\Catalog\Card\BusinessCardController@postEditPriceTable']);
            Route::get('business/card/image/{id}',          ['as' => 'business.product.image',          'uses' => 'Admin\Catalog\Card\BusinessCardController@image']);
            Route::post('business/card/storeBubbles',       ['as' => 'business.product.bubbles.store',  'uses' => 'Admin\Catalog\Card\BusinessCardController@storeBubbles']);
            Route::post('business/card/removeBubble',       ['as' => 'business.product.bubbles.remove', 'uses' => 'Admin\Catalog\Card\BusinessCardController@removeBubble']);
            Route::post('business/card/repositionBubble',   ['as' => 'business.product.bubbles.reposition', 'uses' => 'Admin\Catalog\Card\BusinessCardController@repositionBubble']);
            
            //Invitation
            // -- Service
            Route::get('invitation/content',                    ['as' => 'invitation.content',         'uses' => 'Admin\Catalog\Card\InvitationContentController@index']);
            Route::post('invitation/content/store',             ['as' => 'invitation.content.store',   'uses' => 'Admin\Catalog\Card\InvitationContentController@store']);
            
            // -- Category
            Route::get('invitation/category',                   ['as' => 'invitation.category.list',   'uses' => 'Admin\Catalog\Card\InvitationCategoryController@index']);
            Route::get('invitation/category/create',            ['as' => 'invitation.category.create', 'uses' => 'Admin\Catalog\Card\InvitationCategoryController@create']);
            Route::get('invitation/category/edit/{id}',         ['as' => 'invitation.category.edit',   'uses' => 'Admin\Catalog\Card\InvitationCategoryController@edit']);
            Route::get('invitation/category/delete/{id}',       ['as' => 'invitation.category.delete', 'uses' => 'Admin\Catalog\Card\InvitationCategoryController@delete']);
            Route::post('invitation/category/store/{id?}',      ['as' => 'invitation.category.store',  'uses' => 'Admin\Catalog\Card\InvitationCategoryController@store']);            
            
            // -- Product
            Route::get('invitation/card',                       ['as' => 'invitation.product.list',     'uses' => 'Admin\Catalog\Card\InvitationCardController@index']);
            Route::get('invitation/card/create',                ['as' => 'invitation.product.create',   'uses' => 'Admin\Catalog\Card\InvitationCardController@create']);
            Route::get('invitation/card/edit/{id}',             ['as' => 'invitation.product.edit',     'uses' => 'Admin\Catalog\Card\InvitationCardController@edit']);
            Route::get('invitation/card/delete/{id}',           ['as' => 'invitation.product.delete',   'uses' => 'Admin\Catalog\Card\InvitationCardController@delete']);
            Route::post('invitation/card/store/{id?}',          ['as' => 'invitation.product.store',    'uses' => 'Admin\Catalog\Card\InvitationCardController@store']);
            Route::get('invitation/card/price/{id}',            ['as' => 'invitation.product.price',    'uses' => 'Admin\Catalog\Card\InvitationCardController@price']);
            Route::post('invitation/card/price/store/{id}',     ['as' => 'invitation.product.price.store',    'uses' => 'Admin\Catalog\Card\InvitationCardController@postEditPriceTable']);
            Route::get('invitation/card/image/{id}',            ['as' => 'invitation.product.image',          'uses' => 'Admin\Catalog\Card\InvitationCardController@image']);
            Route::post('invitation/card/storeBubbles',         ['as' => 'invitation.product.bubbles.store',  'uses' => 'Admin\Catalog\Card\InvitationCardController@storeBubbles']);
            Route::post('invitation/card/removeBubble',         ['as' => 'invitation.product.bubbles.remove', 'uses' => 'Admin\Catalog\Card\InvitationCardController@removeBubble']);
            Route::post('invitation/card/repositionBubble',     ['as' => 'invitation.product.bubbles.reposition', 'uses' => 'Admin\Catalog\Card\InvitationCardController@repositionBubble']);
        });
        
        //Template
        Route::group(['prefix' => 'template', 'as' => 'admin.template.'], function () {
            //Business
            // -- Service
            Route::get('business/content',                   ['as' => 'business.content',         'uses' => 'Admin\Catalog\Template\BusinessContentController@index']);
            Route::post('business/content/store',            ['as' => 'business.content.store',   'uses' => 'Admin\Catalog\Template\BusinessContentController@store']);
            
            // -- Product
            Route::get('business/product',                   ['as' => 'business.product.list',    'uses' => 'Admin\Catalog\Template\BusinessTemplateController@index']);
            Route::get('business/product/create',            ['as' => 'business.product.create',  'uses' => 'Admin\Catalog\Template\BusinessTemplateController@create']);
            Route::get('business/product/edit/{id}',         ['as' => 'business.product.edit',    'uses' => 'Admin\Catalog\Template\BusinessTemplateController@edit']);
            Route::get('business/product/delete/{id}',       ['as' => 'business.product.delete',  'uses' => 'Admin\Catalog\Template\BusinessTemplateController@delete']);
            Route::post('business/product/store/{id?}',      ['as' => 'business.product.store',   'uses' => 'Admin\Catalog\Template\BusinessTemplateController@store']);
            Route::post('business/product/change/product',   ['as' => 'business.product.change.product', 'uses' => 'Admin\Catalog\Template\BusinessTemplateController@ajaxChangeProduct']);
            Route::get('business/product/image/{id}',        ['as' => 'business.product.image',          'uses' => 'Admin\Catalog\Template\BusinessTemplateController@image']);
            Route::post('business/product/storeBubbles',     ['as' => 'business.product.bubbles.store',  'uses' => 'Admin\Catalog\Template\BusinessTemplateController@storeBubbles']);
            Route::post('business/product/removeBubble',     ['as' => 'business.product.bubbles.remove', 'uses' => 'Admin\Catalog\Template\BusinessTemplateController@removeBubble']);
            Route::post('business/product/repositionBubble', ['as' => 'business.product.bubbles.reposition', 'uses' => 'Admin\Catalog\Template\BusinessTemplateController@repositionBubble']);
             
            //Invitation
            // -- Service
            Route::get('invitation/content',                   ['as' => 'invitation.content',         'uses' => 'Admin\Catalog\Template\InvitationContentController@index']);
            Route::post('invitation/content/store',            ['as' => 'invitation.content.store',   'uses' => 'Admin\Catalog\Template\InvitationContentController@store']);
            
            // -- Product
            Route::get('invitation/product',                   ['as' => 'invitation.product.list',    'uses' => 'Admin\Catalog\Template\InvitationTemplateController@index']);
            Route::get('invitation/product/create',            ['as' => 'invitation.product.create',  'uses' => 'Admin\Catalog\Template\InvitationTemplateController@create']);
            Route::get('invitation/product/edit/{id}',         ['as' => 'invitation.product.edit',    'uses' => 'Admin\Catalog\Template\InvitationTemplateController@edit']);
            Route::get('invitation/product/delete/{id}',       ['as' => 'invitation.product.delete',  'uses' => 'Admin\Catalog\Template\InvitationTemplateController@delete']);
            Route::post('invitation/product/store/{id?}',      ['as' => 'invitation.product.store',   'uses' => 'Admin\Catalog\Template\InvitationTemplateController@store']);
            Route::post('invitation/product/change/product',   ['as' => 'invitation.product.change.product', 'uses' => 'Admin\Catalog\Template\InvitationTemplateController@ajaxChangeProduct']);
            Route::get('invitation/product/image/{id}',        ['as' => 'invitation.product.image',          'uses' => 'Admin\Catalog\Template\InvitationTemplateController@image']);
            Route::post('invitation/product/storeBubbles',     ['as' => 'invitation.product.bubbles.store',  'uses' => 'Admin\Catalog\Template\InvitationTemplateController@storeBubbles']);
            Route::post('invitation/product/removeBubble',     ['as' => 'invitation.product.bubbles.remove', 'uses' => 'Admin\Catalog\Template\InvitationTemplateController@removeBubble']);
            Route::post('invitation/product/repositionBubble', ['as' => 'invitation.product.bubbles.reposition', 'uses' => 'Admin\Catalog\Template\InvitationTemplateController@repositionBubble']);
        });
        
        //Design Service
        Route::group(['prefix' => 'design', 'as' => 'admin.design.'], function () {
            // -- Service
            Route::get('content',               ['as' => 'content',         'uses' => 'Admin\Catalog\DesignService\ContentController@index']);
            Route::post('content/store',        ['as' => 'content.store',   'uses' => 'Admin\Catalog\DesignService\ContentController@store']);
            
            // -- Category
            Route::get('category',                  ['as' => 'category.list',   'uses' => 'Admin\Catalog\DesignService\CategoryController@index']);
            Route::get('category/create',           ['as' => 'category.create', 'uses' => 'Admin\Catalog\DesignService\CategoryController@create']);
            Route::get('category/edit/{id}',        ['as' => 'category.edit',   'uses' => 'Admin\Catalog\DesignService\CategoryController@edit']);
            Route::get('category/delete/{id}',      ['as' => 'category.delete', 'uses' => 'Admin\Catalog\DesignService\CategoryController@delete']);
            Route::post('category/store/{id?}',     ['as' => 'category.store',  'uses' => 'Admin\Catalog\DesignService\CategoryController@store']);  
            
            // -- Product
            Route::get('product',                   ['as' => 'product.list',    'uses' => 'Admin\Catalog\DesignService\ProductController@index']);
            Route::get('product/create',            ['as' => 'product.create',  'uses' => 'Admin\Catalog\DesignService\ProductController@create']);
            Route::get('product/edit/{id}',         ['as' => 'product.edit',    'uses' => 'Admin\Catalog\DesignService\ProductController@edit']);
            Route::get('product/delete/{id}',       ['as' => 'product.delete',  'uses' => 'Admin\Catalog\DesignService\ProductController@delete']);
            Route::post('product/store/{id?}',      ['as' => 'product.store',   'uses' => 'Admin\Catalog\DesignService\ProductController@store']);
        });
        
        //Design Showcase
        Route::group(['prefix' => 'showcase', 'as' => 'admin.showcase.'], function () {
            // -- Business
            Route::get('business',                   ['as' => 'business.list',    'uses' => 'Admin\Catalog\Showcase\BusinessShowcaseController@index']);
            Route::get('business/create',            ['as' => 'business.create',  'uses' => 'Admin\Catalog\Showcase\BusinessShowcaseController@create']);
            Route::get('business/edit/{id}',         ['as' => 'business.edit',    'uses' => 'Admin\Catalog\Showcase\BusinessShowcaseController@edit']);
            Route::get('business/delete/{id}',       ['as' => 'business.delete',  'uses' => 'Admin\Catalog\Showcase\BusinessShowcaseController@delete']);
            Route::post('business/store/{id?}',      ['as' => 'business.store',   'uses' => 'Admin\Catalog\Showcase\BusinessShowcaseController@store']);
            Route::post('business/change/product',   ['as' => 'business.change.product',  'uses' => 'Admin\Catalog\Showcase\BusinessShowcaseController@ajaxChangeProduct']);
            
            // -- Invitation
            Route::get('invitation',                   ['as' => 'invitation.list',    'uses' => 'Admin\Catalog\Showcase\InvitationShowcaseController@index']);
            Route::get('invitation/create',            ['as' => 'invitation.create',  'uses' => 'Admin\Catalog\Showcase\InvitationShowcaseController@create']);
            Route::get('invitation/edit/{id}',         ['as' => 'invitation.edit',    'uses' => 'Admin\Catalog\Showcase\InvitationShowcaseController@edit']);
            Route::get('invitation/delete/{id}',       ['as' => 'invitation.delete',  'uses' => 'Admin\Catalog\Showcase\InvitationShowcaseController@delete']);
            Route::post('invitation/store/{id?}',      ['as' => 'invitation.store',   'uses' => 'Admin\Catalog\Showcase\InvitationShowcaseController@store']);
            Route::post('invitation/change/product',   ['as' => 'invitation.change.product',  'uses' => 'Admin\Catalog\Showcase\InvitationShowcaseController@ajaxChangeProduct']);
        });
        
        // -- Category
        Route::get('logosample',                  ['as' => 'admin.logosample.list',   'uses' => 'Admin\Catalog\LogoSampleController@index']);
        Route::get('logosample/create',           ['as' => 'admin.logosample.create', 'uses' => 'Admin\Catalog\LogoSampleController@create']);
        Route::get('logosample/edit/{id}',        ['as' => 'admin.logosample.edit',   'uses' => 'Admin\Catalog\LogoSampleController@edit']);
        Route::get('logosample/delete/{id}',      ['as' => 'admin.logosample.delete', 'uses' => 'Admin\Catalog\LogoSampleController@delete']);
        Route::post('logosample/store/{id?}',     ['as' => 'admin.logosample.store',  'uses' => 'Admin\Catalog\LogoSampleController@store']);            
    });
    
    // -- Cms
    Route::group(['prefix' => 'cms', 'as' => 'admin.cms.'], function () {
        
        // -- Page
        Route::get('page',                  ['as' => 'page.list',       'uses' => 'Admin\Cms\PageController@index']);
        Route::get('page/create',           ['as' => 'page.create',     'uses' => 'Admin\Cms\PageController@create']);
        Route::get('page/edit/{id}',        ['as' => 'page.edit',       'uses' => 'Admin\Cms\PageController@edit']);
        Route::get('page/delete/{id}',      ['as' => 'page.delete',     'uses' => 'Admin\Cms\PageController@delete']);
        Route::post('page/store/{id?}',     ['as' => 'page.store',      'uses' => 'Admin\Cms\PageController@store']);
        
        // -- Slideshow
        Route::get('slide',                 ['as' => 'slide.list',      'uses' => 'Admin\Cms\SlideController@index']);
        Route::get('slide/create',          ['as' => 'slide.create',    'uses' => 'Admin\Cms\SlideController@create']);
        Route::get('slide/edit/{id}',       ['as' => 'slide.edit',      'uses' => 'Admin\Cms\SlideController@edit']);
        Route::get('slide/delete/{id}',     ['as' => 'slide.delete',    'uses' => 'Admin\Cms\SlideController@delete']);
        Route::post('slide/store/{id?}',    ['as' => 'slide.store',     'uses' => 'Admin\Cms\SlideController@store']);
        
        // -- Homepage Slideshow
        Route::get('homeslider',            ['as' => 'homdeslider.compose', 'uses' => 'Admin\Cms\HomeSliderController@index']);
        Route::post('homeslider/store',     ['as' => 'homdeslider.store',   'uses' => 'Admin\Cms\HomeSliderController@store']);
    });
    
    // -- Sales
    Route::group(['prefix' => 'sales', 'as' => 'admin.sales.'], function () {
        
        // -- Order
        Route::get('order',                             ['as' => 'order.list',  'uses' => 'Admin\Sales\OrderController@index']);
        Route::get('order/create',                      ['as' => 'order.create','uses' => 'Admin\Sales\OrderController@create']);
        Route::get('order/view/{id}',                   ['as' => 'order.detail','uses' => 'Admin\Sales\OrderController@detail']);
        Route::get('order/item/{id}',                   ['as' => 'order.item',  'uses' => 'Admin\Sales\OrderController@item']);
        Route::get('order/delete/{id}',                 ['as' => 'order.delete','uses' => 'Admin\Sales\OrderController@delete']);
        Route::get('order/invoice/{id}',                ['as' => 'order.invoice','uses' => 'Admin\Sales\OrderController@invoice']);
        Route::post('order/postItem',                   ['as' => 'order.item.post',             'uses' => 'Admin\Sales\OrderController@postItem']);
        Route::post('order/ajaxTrackingForm',           ['as' => 'order.item.tracking.form',    'uses' => 'Admin\Sales\OrderController@ajaxTrackingForm']);
        Route::post('order/postAddTracking',            ['as' => 'order.add.tracking.post',     'uses' => 'Admin\Sales\OrderController@postAddTracking']);
        
        Route::post('order/assignStuff',                ['as' => 'order.assign.stuff',  'uses' => 'Admin\Sales\OrderController@assignStuff']);
        Route::post('order/updateOrder',                ['as' => 'order.update.order',  'uses' => 'Admin\Sales\OrderController@updateOrder']);
        
        // -- Taxzone
        Route::get('taxzone',               ['as' => 'taxzone.list',    'uses' => 'Admin\Sales\TaxZoneController@index']);
        Route::get('taxzone/create',        ['as' => 'taxzone.create',  'uses' => 'Admin\Sales\TaxZoneController@create']);
        Route::get('taxzone/edit/{id}',     ['as' => 'taxzone.edit',    'uses' => 'Admin\Sales\TaxZoneController@edit']);
        Route::get('taxzone/delete/{id}',   ['as' => 'taxzone.delete',  'uses' => 'Admin\Sales\TaxZoneController@delete']);
        Route::post('taxzone/store/{id?}',  ['as' => 'taxzone.store',   'uses' => 'Admin\Sales\TaxZoneController@store']);

        // -- Coupon
        Route::get('coupon',                ['as' => 'coupon.list',     'uses' => 'Admin\Sales\CouponController@index']);
        Route::get('coupon/create',         ['as' => 'coupon.create',   'uses' => 'Admin\Sales\CouponController@create']);
        Route::get('coupon/edit/{id}',      ['as' => 'coupon.edit',     'uses' => 'Admin\Sales\CouponController@edit']);
        Route::get('coupon/delete/{id}',    ['as' => 'coupon.delete',   'uses' => 'Admin\Sales\CouponController@delete']);
        Route::post('coupon/store/{id?}',   ['as' => 'coupon.store',    'uses' => 'Admin\Sales\CouponController@store']);
    });
    
    // -- Members
    Route::group(['prefix' => 'member', 'as' => 'admin.member.'], function () {
        Route::get('',                  ['as' => 'list',   'uses' => 'Admin\MemberController@index']);
        Route::get('create',            ['as' => 'create', 'uses' => 'Admin\MemberController@create']);
        Route::get('edit/{id}',         ['as' => 'edit',   'uses' => 'Admin\MemberController@edit']);
        Route::get('delete/{id}',       ['as' => 'delete', 'uses' => 'Admin\MemberController@delete']);
        Route::post('store',            ['as' => 'store',  'uses' => 'Admin\MemberController@store']);
        Route::post('ajaxCheckEmail',   ['as' => 'ajax.check.email', 'uses' => 'Admin\MemberController@ajaxCheckEmail']);
        
        Route::get('permissions',           ['as' => 'permission',          'uses' => 'Admin\MemberController@permissions']);
        Route::post('ajaxUpdatePermission', ['as' => 'permission.update',   'uses' => 'Admin\MemberController@ajaxUpdatePermission']);
    });
    
    // -- Permissions
    Route::group(['prefix' => 'permission', 'as' => 'admin.permission.'], function () {
        Route::get('',                  ['as' => 'list',   'uses' => 'Admin\PermissionController@index']);
        Route::get('create',            ['as' => 'create', 'uses' => 'Admin\PermissionController@create']);
        Route::get('edit/{id}',         ['as' => 'edit',   'uses' => 'Admin\PermissionController@edit']);
        Route::get('delete/{id}',       ['as' => 'delete', 'uses' => 'Admin\PermissionController@delete']);
        Route::post('store/{id?}',      ['as' => 'store',  'uses' => 'Admin\PermissionController@store']);
    });
    
    // -- Customers
    Route::group(['prefix' => 'customer', 'as' => 'admin.customer.'], function () {
        Route::get('',                  ['as' => 'list',   'uses' => 'Admin\CustomerController@index']);
        Route::get('create',            ['as' => 'create', 'uses' => 'Admin\CustomerController@create']);
        Route::get('edit/{id}',         ['as' => 'edit',   'uses' => 'Admin\CustomerController@edit']);
        Route::get('delete/{id}',       ['as' => 'delete', 'uses' => 'Admin\CustomerController@delete']);
        Route::post('store',            ['as' => 'store',  'uses' => 'Admin\CustomerController@store']);
        Route::post('ajaxCheckEmail',   ['as' => 'ajax.check.email', 'uses' => 'Admin\CustomerController@ajaxCheckEmail']);
    });
});

//routes from db
// -- Card Category
foreach(CardCategory::all() as $cat)
{
    Route::get($cat->getUri(), 'CardCategoryController@show');
} 

// -- Card
foreach(Card::all() as $card)
{     
    Route::get($card->getUri(),         'CardController@show');
    Route::any($card->getUploadUri(),   'CardController@upload');
} 

// -- Template
foreach(CardTemplate::all() as $template)
{
    Route::get($template->getUri(),             'TemplateController@show');
    Route::any($template->getUploadUri(),       'TemplateController@upload');
    Route::post($template->getUpdatePriceUri(), 'TemplateController@ajaxUpdatePrice');
} 

// -- Design Showcase
foreach(Showcase::all() as $case)
{
    Route::get($case->getUri(), 'ShowcaseController@show');
}