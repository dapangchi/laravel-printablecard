@extends('emails.template')
@section('content')
    <h2>Hello, {{ $item->order->customer_name }}!</h2>
    
    <div>
        For your ORDER # {{ $item->order->number() }}, {{ $item->jobNumber() }}.<br/>
        We notice that you have not yet upload files / information.<br/>
        Our sales team will contact you directly via email to help you.

        Thanks,<br/>
        Rockdesign Team.
    </div>
@stop