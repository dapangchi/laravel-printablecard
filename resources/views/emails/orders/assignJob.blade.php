@extends('emails.template')
@section('content')
	<h2>Hello, {{ $stuff->full_name() }}</h2>
    
	<div>
	    New job[ {{ $item->jobNumber() }} ] is assigned to you. 
        Please check your job <a href="{{ route('admin.sales.order.item', array('id' => $item->id)) }}">here</a>.<br/>

		Thanks,<br/>
		Rockdesign Team.
	</div>
@stop