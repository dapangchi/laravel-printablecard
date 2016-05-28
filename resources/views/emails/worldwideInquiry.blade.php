@extends('emails.template')
@section('content')
    <h2>Hello, {{ $receiverName }}!</h2>
    <div>
        Requestor Phone: {{ $customerPhone }}<br/>
        Requestor Email: {{ $customerEmail }}<br/>
        Requestor Address: {{ $customerAddress }}, {{ $customerState }} {{ $customerCountry }}, {{ $customerZipcode }}<br/>

        Sample Pack: {{ $packName }}<br/>
        Shipping Method: {{ $shipping }}<br/>
        Price: {{ $price }}<br/>

        Thanks,<br/>
        Rockdesign Team.
    </div>
@stop
