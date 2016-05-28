@extends('emails.template')
@section('content')
	<h2>Hello, {{ $item->order->customer_name }}!</h2>
    
	<div>
	    For your ORDER # {{ $item->order->number() }}, {{ $item->jobNumber() }}.<br/>
        We notice that there are issues with your design files.<br/>
        Our sales team will contact you directly via email.

		Thanks,<br/>
		Rockdesign Team.
	</div>
@stop