<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'fileupload/slide',
        'fileupload/card',
        'fileupload/template',
        'fileupload/showcase',
        'fileupload/design',
        'fileupload/homeslider',
        'fileupload/design_file',
        'fileupload/icon',
        
        'common/getTags',
        
        'cart/checkout/paypalIPNListener',
        'sample-packs/paypalIPNListener',
    ];
}
