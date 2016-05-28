<?php
    $cardTypes = [
        CARD_AMERICA_EXPRESS => 'America Express',
        CARD_VISA       => 'Visa',
        CARD_MASTER     => 'Master',
        CARD_DISCOVER   => 'Discover'
    ];
    
    $months = creditcard_expire_months();
    $years = creditcard_expire_years();
?>

{!! Form::open(array('id' => 'payment-form', 'method' => 'post')) !!}
    <div class="col-md-6">
        <h3>Please select your payment method</h3>
        <div class="option-row">
            <div class="radio radio-success">
                {!! Form::radio('payment-method', PAYMENT_PAYPAL, true, array('class' => 'payment-radio', 'id' => 'payment-radio-paypal')) !!}
                <label for="payment-radio-paypal"><img src="{{ asset('frontend/img/paypal(long).svg') }}" alt="PayPal"></label>
            </div>
        </div>
        <div class="option-row">
            <div class="radio radio-success">
                {!! Form::radio('payment-method', PAYMENT_CREDIT, false, array('class' => 'payment-radio', 'id' => 'payment-radio-creditcard')) !!} 
                <label for="payment-radio-creditcard">Credit Card</label>
            </div>
        </div>
        <div id="credit-card-info" class="credit-card-info">
            <div id="payment-error" style="display:none;"></div>
            
            <div class="credit-card-row">
                <div class="left-bl">Name on the card</div>
                <div class="right-bl">
                    {!! Form::text('card-name', null) !!}
                </div>
            </div>
            <div class="credit-card-row">
                <div class="left-bl">Card Type</div>
                <div class="right-bl">
                    {!! Form::select('card-type', $cardTypes, null) !!}
                </div>
            </div>
            <div class="credit-card-row">
                <div class="left-bl">Card Number</div>
                <div class="right-bl">
                    {!! Form::text('card-number', null, array('id' => 'card-number', 'placeholder' => '•••• •••• •••• ••••')) !!}
                </div>
            </div>
            <div class="credit-card-row expiration-row">
                <div class="left-bl">Expiration Date</div>
                <div class="right-bl">
                    {!! Form::select('expire-month', $months, null) !!}
                    {!! Form::select('expire-year', $years, null) !!}
                </div>
            </div>
            <div class="credit-card-row security-row">
                <div class="left-bl">Security code</div>
                <div class="right-bl">
                    {!! Form::text('card-cvc', null, array('id' => 'card-cvc', 'placeholder' => '•••')) !!}
                    <a href="#">What&rsquo;s security code</a>
                </div>
            </div>
            
            @if(isset($current_customer->id))
            <div class="check-bl-wrap">
                <div class="check-bl">
                    <label>{!! Form::checkbox('default-card', 1, false) !!} Set this card as default payment method</label>
                </div>
                <div class="check-bl">
                    <label>{!! Form::checkbox('remember-card', 1, false) !!} Remember this card</label>
                </div>
            </div> 
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div id="order-summary-box" class="order-summary-bl">
            @include('frontend.cart.checkout._order_summary')
        </div>
    </div>
    <div class="col-md-12">
        <button class="chekout-but lg-but">CONTINUE</button>
    </div>
{!! Form::close() !!}