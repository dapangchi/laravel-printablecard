@extends('emails.template')
@section('content')
    <h2>Hello, {{ $orderItem->order->customer_name }}!</h2>
    
    <div>
        Your order item of <a href="{{ route('customer.tracking.detail', array('id' => $orderItem->order->id)) }}">{{ $orderItem->order->number() }}</a> is shipped via {{ $orderItem->jobTrackingMethodName() }}.
        
        @if($orderItem->job_tracking_number != '')
        You can tracking on <a href="{{ $orderItem->jobTrackingUrl() }}">here</a>.
        @endif

        <br/>
        Thanks,<br/>
        Rockdesign Team.
    </div>
@stop