<div class="avg-price">
@if($cards > 0) {{ format_currency($price / $cards) }}
@else {{ format_currency(0) }}
@endif
&nbsp;<span>per card</span>
</div>

@if($discountPercent > 0)
<div class="saved-price">Save {{ $discountPercent }} %</div>
@endif

<div class="total-price">Total: {{ format_currency($price) }}</div>