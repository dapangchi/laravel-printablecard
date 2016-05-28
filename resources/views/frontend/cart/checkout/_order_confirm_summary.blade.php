<table class="order-information-total">
    <tr class="sub-total-row">
        <td class="order-information-titl">Sub Total</td>
        <td>{{ format_currency($cart->subTotalPrice(), $currency) }}</td>
    </tr>

    @if($cart->shippingPrice > 0)
    <tr class="sub-total-row">
        <td class="order-information-titl">SHIPPING</td>
        <td>{{ format_currency($cart->shippingPrice, $currency) }}</td>
    </tr>
    @endif
    
    @if($cart->taxPrice > 0)
    <tr class="sub-total-row">
        <td class="order-information-titl">TAX</td>
        <td>{{ format_currency($cart->taxPrice, $currency) }}</td>
    </tr>
    @endif
    
    @if($cart->hasCoupon)
    <tr class="sub-total-row">
        <td class="order-information-titl">Discount(Coupon - {{ format_perent($cart->couponDiscountPercent, $currency) }})</td>
        <td> -{{ format_currency($cart->discountPrice(), $currency) }}</td>
    </tr>
    @endif
    
    <tr class="total-row">
        <td class="order-information-titl">TOTAL</td>
        <td>{{ format_currency($cart->totalPrice(), $currency) }}</td>
    </tr>
</table>