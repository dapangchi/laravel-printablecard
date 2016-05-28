@extends('emails.template')
@section('content')
    <h2>Hello, {{ $item->order->customer_name }}!</h2>
    
    <div>
        For your ORDER # {{ $item->order->number() }}, {{ $item->jobNumber() }} in production.<br/>
        Once it is ready for shipping we will email you a tracking #.<br/>

        Thanks,<br/>
        Rockdesign Team.
    </div>
@stop