<div class="order-summary-titl">Order Summary</div>
<table class="order-summary-table">
    <tr>
        <td>Subtotal:</td>
        <td>{{ format_currency($cart->subTotalPrice(), $currency) }}</td>
    </tr>
    
    @if($cart->shippingPrice > 0)
    <tr>
        <td>Shipping:</td>
        <td>{{ format_currency($cart->shippingPrice, $currency) }}</td>
    </tr>
    @endif
    
    @if($cart->taxPrice > 0)
    <tr>
        <td>Tax:</td>
        <td>{{ format_currency($cart->taxPrice, $currency) }}</td>
    </tr>
    @endif
    
    @if($cart->hasCoupon)
    <tr>
        <td>Discount(Coupon - {{ format_perent($cart->couponDiscountPercent) }}):</td>
        <td> -{{ format_currency($cart->discountPrice(), $currency) }}</td>
    </tr>
    @endif
    
    <tr class="ordered-row">
        <td>Total:</td>
        <td>
            {{ format_currency($cart->totalPrice(), $currency) }}
            <div class="currency-hint">Currency: {{ isset($currency) ? $currency : 'USD' }}</div>
        </td>
    </tr>
</table>

<div id="coupon-block" class="coupon-block">
    @if(isset($message))
    <div style="color:red;">{{ $message }}</div>
    @endif
    
    @if($cart->hasCoupon)
    <div class="medium-but coupon-but" id="btn-coupon-cancel">Cancel Coupon</div>
    @else
    <input type="text" placeholder="Coupon / Gift Certificate Code" id="coupon-code">
    <div class="medium-but coupon-but" id="btn-coupon-apply">APPLY</div>
    @endif
</div>