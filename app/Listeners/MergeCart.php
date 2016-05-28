<?php

namespace App\Listeners;

use App\Events\CustomerLoggedIn;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\Customer;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\CartItemOption;
use App\Models\CartItemFile;
use App\Libraries\MyCart;
class MergeCart
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
     * @param  CustomerLoggedIn  $event
     * @return void
     */
    public function handle(CustomerLoggedIn $event)
    {
        $customerId = $event->customerId;
        
        //get saved cart from database
        $cart = Cart::where('customer_id', $customerId)->first();
        if(isset($cart->id))
        {
            //merge with session
            if(MyCart::hasCartId())
            {
                $tempCartId = MyCart::getCartId();
                
                CartItem::where('cart_id', $tempCartId)->update(['cart_id' => $cart->id]);
                CartItemOption::where('cart_id', $tempCartId)->update(['cart_id' => $cart->id]);
                CartItemFile::where('cart_id', $tempCartId)->update(['cart_id' => $cart->id]);
                Cart::where('id', $tempCartId)->delete();
            }
            
            MyCart::setCartId($cart->id);
        }
        else
        {
            if(MyCart::hasCartId())
            {
                $cartId = MyCart::getCartId();
                $cart = Cart::find($cartId);
                
                $cart->customer_id = $customerId;
                $cart->session_key = NULL;
                $cart->save();
            }      
        }
    }
}
