@if($order->isShippingRequired())    
    <div class="col-md-3 col-sm-4">
        <div class="shipping-titl">Bill to</div>
        
        <div class="shipping-details">{{ $order->billing_name }}</div>
        <ul>
            <li>{{ $order->billing_address }}</li>
            <li>{{ $order->billing_city }}, {{ $order->billing_state }} {{ $order->billing_zipcode }}</li>
            <li>{{ $order->billing_country }}</li>
            <li>{{ $order->billing_phone }}</li>
        </ul>
    </div>
    <div class="col-md-3 col-sm-4">
        <div>Ship to</div>
        
        <div class="shipping-details">{{ $order->shipping_name }}</div>
        <ul>
            <li>{{ $order->shipping_address }}</li>
            <li>{{ $order->shipping_city }}, {{ $order->shipping_state }} {{ $order->shipping_zipcode }}</li>
            <li>{{ $order->shipping_country }}</li>
            <li>{{ $order->shipping_phone }}</li>
        </ul>
    </div>
@else
    <div class="col-md-6 col-sm-8">
        <div>Address</div>
        
        <div class="shipping-details">{{ $order->shipping_name }}</div>
        <ul>
            <li>{{ $order->shipping_address }}</li>
            <li>{{ $order->shipping_city }}, {{ $order->shipping_state }} {{ $order->shipping_zipcode }}</li>
            <li>{{ $order->shipping_country }}</li>
            <li>{{ $order->shipping_phone }}</li>
        </ul>
    </div>
@endif