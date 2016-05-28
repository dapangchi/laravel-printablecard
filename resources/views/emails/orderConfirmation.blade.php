@extends('emails.template')
@section('content')

<?php
    $isShippingRequired = $order->isShippingRequired();
?>
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;padding:0;margin:0 auto;background-color:#fafafa;font-size:14px">
<tbody>
    <tr>
    <td valign="top" align="center" style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:0;margin:0;width:100%">
        <table cellspacing="0" cellpadding="0" border="0" align="center" style="border-collapse:collapse;padding:0;margin:0 auto;width:700px">
        <tbody>
            <tr>
            <td height="20" style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:0;margin:0;font-size:20px;line-height:20px">&nbsp;</td>
            </tr>
            <tr>
            <td valign="top" style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:5px;margin:0;background:#ffffff">
                <table cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;padding:0;margin:0;width:100%">
                <tbody>
                    <tr>
                    <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                        <table cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;padding:0;margin:0">
                        <tbody>
                            <tr>
                            <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:0 1%;margin:0;border-bottom:1px dashed #eee;text-align:center;width:58%">
                                <h1 style="font-family:Open Sans,Calibri,sans-serif;font-weight:500;font-size:16px;margin:1em 0;line-height:20px;text-transform:uppercase;margin-top:25px">Thank you for your order from {{ $settings['site.name'] }}.</h1>
                                <p style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;line-height:20px;margin:1em 0">Our regular business hours are from Monday to Friday 9AM - 5PM Pacific Time. Our sales team will review your order and email you within 1 business day. Please do not reply to this email, as it was sent from an unmonitored account. Should you have any question with regarding to your order, please contact our online order department via email: <a href="mailto:online@rockdesign.com">online@rockdesign.com</a>. Thank you.</p>
                            </td>
                            <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:2%;margin:0;width:40%;border-bottom:1px dashed #eee">
                                <h4 style="font-family:Open Sans,Calibri,sans-serif;font-weight:bold;margin-bottom:5px;font-size:13px;margin-top:13px">Order Questions?</h4>
                                <p style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;font-size:12px;line-height:17px;margin:1em 0;text-decoration:none">

                                <b>Call Us:</b>
                                <a style="color:#fc8020;text-decoration:none">{{ $settings['site.phone'] }}</a>
                                <br><b>Email:</b> <a target="_blank" style="color:#fc8020;text-decoration:none" href="mailto:online@rockdesign.com">online@rockdesign.com</a>

                                </p>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </td>
                    </tr>
                    <tr>
                    <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;text-align:center">
                        <h3 style="font-family:Open Sans,Calibri,sans-serif;font-weight:bold;font-size:26px;margin-bottom:10px;margin-top:15px">Your order <span>{{ $order->number() }}</span></h3>
                        <p style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;font-size:11px;margin:1em 0 15px">Placed on {{ $order->created_at }}</p>
                        <p style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;font-size:11px;margin:1em 0 15px">Currency : {{ $order->currency }}</p>
                    </td>
                    </tr>
                    <tr>
                    <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:0;margin:0"></td>
                    </tr>
                    <tr>
                    <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                        <table cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;padding:10px 15px;margin:0;width:100%">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th style="font-family:Open Sans,Calibri,sans-serif;font-weight:700;padding:10px 15px;text-transform:uppercase;text-align:left;font-size:11px;border-bottom:1px solid #eee">Name</th>
                                <!--<th>Description</th>-->
                                <th style="font-family:Open Sans,Calibri,sans-serif;font-weight:700;padding:10px 15px;text-transform:uppercase;text-align:center;font-size:11px;border-bottom:1px solid #eee">Qty </th>
                                <th style="font-family:Open Sans,Calibri,sans-serif;font-weight:700;padding:10px 15px;text-transform:uppercase;text-align:center;font-size:11px;border-bottom:1px solid #eee">Rate </th>
                                <th style="font-family:Open Sans,Calibri,sans-serif;font-weight:700;padding:10px 15px;text-transform:uppercase;text-align:right;font-size:11px;border-bottom:1px solid #eee">Price </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->items as $item)
                                @include('emails.orderConfirmation.item', compact('item'))
                            @endforeach
                        </tbody>
                        </table>
                    </td>
                    </tr>
                    <tr>
                    <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                        <table cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;padding:0;margin:0;width:100%;background:#fafafa">
                        <tbody>
                            <tr>
                            <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:20px 15px;margin:0;text-align:right;line-height:20px">
                                <table cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;padding:0;margin:0;width:100%">
                                <tbody>
                                    <tr>
                                        <td align="right" style="padding:3px 9px;font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;margin:0" colspan="3">
                                            Subtotal </td>
                                        <td align="right" style="padding:3px 9px;font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;margin:0">
                                            <span style="font-family:&quot;Helvetica Neue&quot;,Verdana,Arial,sans-serif">{{ format_currency($order->sub_total_price, $order->currency, false) }}</span> </td>
                                    </tr>
                                    
                                    @if($order->shipping_price > 0)
                                    <tr style="padding-bottom:5px">
                                        <td align="right" style="padding:3px 9px;font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;margin:0" colspan="3">
                                            Shipping </td>
                                        <td align="right" style="padding:3px 9px;font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;margin:0">
                                            <span style="font-family:&quot;Helvetica Neue&quot;,Verdana,Arial,sans-serif">{{ format_currency($order->shipping_price, $order->currency, false) }}</span> </td>
                                    </tr>
                                    @endif
                                    
                                    @if($order->tax_price > 0)
                                    <tr>
                                        <td align="right" style="padding:3px 9px;font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;margin:0" colspan="3">
                                            Tax </td>
                                        <td align="right" style="padding:3px 9px;font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;margin:0">
                                            <span style="font-family:&quot;Helvetica Neue&quot;,Verdana,Arial,sans-serif">{{ format_currency($order->tax_price, $order->currency, false) }}</span></td>
                                    </tr>
                                    @endif
                                    
                                    <tr>
                                        <td align="right" style="padding:3px 9px;font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;margin:0" colspan="3">
                                            <strong style="font-family:Open Sans,Calibri,sans-serif;font-weight:300">Grand Total</strong>
                                        </td>
                                        <td align="right" style="padding:3px 9px;font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;margin:0">
                                            <strong style="font-family:Open Sans,Calibri,sans-serif;font-weight:300"><span style="font-family:&quot;Helvetica Neue&quot;,Verdana,Arial,sans-serif">{{ format_currency($order->total_price, $order->currency, false) }}</span></strong></td>
                                    </tr>
                                </tbody>
                                </table>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;padding:0;margin:0">
                        <tbody>
                            <tr>
                                @if($isShippingRequired)
                                <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:10px 15px 0;margin:0;padding-top:10px;text-align:left">
                                    <h6 style="font-family:Open Sans,Calibri,sans-serif;font-weight:400;font-size:14px;margin-bottom:0px;margin-top:5px;text-transform:uppercase">Bill to:</h6>
                                    <p style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;font-size:12px;line-height:18px;margin-bottom:15px;margin-top:2px">
                                        <span>{{ $order->billing_name }}<br>
                                            {{ $order->billing_address }}.<br>
                                            {{ $order->billing_city }},  {{ $order->billing_state }}, {{ $order->billing_zipcode }}<br>
                                            {{ $order->billing_country }}<br>
                                            T: {{ $order->billing_phone }}
                                        </span>
                                    </p>
                                </td>
                                <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:10px 15px 0;margin:0;padding-top:10px;text-align:left">
                                    <h6 style="font-family:Open Sans,Calibri,sans-serif;font-weight:400;font-size:14px;margin-bottom:0px;margin-top:5px;text-transform:uppercase">Ship to:</h6>
                                    <p style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;font-size:12px;line-height:18px;margin-bottom:15px;margin-top:2px">
                                        <span>{{ $order->shipping_name }}<br>
                                            {{ $order->shipping_address }}.<br>
                                            {{ $order->shipping_city }},  {{ $order->shipping_state }}, {{ $order->shipping_zipcode }}<br>
                                            {{ $order->shipping_country }}<br>
                                            T: {{ $order->shipping_phone }}
                                        </span>
                                    </p>
                                </td>
                                @else
                                <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:10px 15px 0;margin:0;padding-top:10px;text-align:left">
                                    <h6 style="font-family:Open Sans,Calibri,sans-serif;font-weight:400;font-size:14px;margin-bottom:0px;margin-top:5px;text-transform:uppercase">Address:</h6>
                                    <p style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;font-size:12px;line-height:18px;margin-bottom:15px;margin-top:2px">
                                        <span>{{ $order->billing_name }}<br>
                                            {{ $order->billing_address }}.<br>
                                            {{ $order->billing_city }},  {{ $order->billing_state }}, {{ $order->billing_zipcode }}<br>
                                            {{ $order->billing_country }}<br>
                                            T: {{ $order->billing_phone }}
                                        </span>
                                    </p>
                                </td>
                                @endif
                            </tr>
                            <tr>
                                @if($isShippingRequired)
                                <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:10px 15px 0;margin:0;text-align:left;padding-bottom:10px">
                                    <h6 style="font-family:Open Sans,Calibri,sans-serif;font-weight:400;text-align:left;font-size:14px;margin-bottom:0px;margin-top:5px;text-transform:uppercase">Shipping method:</h6>
                                    <p style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;text-align:left;font-size:12px;margin-top:2px;margin-bottom:30px;line-height:18px;padding:0">{{ trans('shipping.fedex.' . $order->shipping_method) }}</p>
                                </td>
                                @endif

                                <td style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;border-collapse:collapse;vertical-align:top;padding:10px 15px 0;margin:0;text-align:left;padding-bottom:10px">
                                    <h6 style="font-family:Open Sans,Calibri,sans-serif;font-weight:400;text-align:left;font-size:14px;margin-bottom:0px;margin-top:5px;text-transform:uppercase">Payment method:</h6>
                                    <p style="font-family:Open Sans,Calibri,sans-serif;font-weight:300;text-align:left;font-size:12px;margin-top:2px;margin-bottom:30px;line-height:18px;padding:0">
                                        @if($order->payment_method == PAYMENT_PAYPAL) Paypal
                                        @else CreditCard
                                        @endif
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </td>
                    </tr>
                </tbody>
                </table>
            </td>
            </tr>
        </tbody>
        </table>
    </td>
    </tr>
</tbody>
</table>    

@stop
