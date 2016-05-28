<?php

namespace App\Listeners;

use App\Events\CustomerLoggedOut;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Libraries\MyCart;
class ClearSession
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CustomerLoggedOut  $event
     * @return void
     */
    public function handle(CustomerLoggedOut $event)
    {
        //Session::flush();
        MyCart::clearCart();
    }
}
