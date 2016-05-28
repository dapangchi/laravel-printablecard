@extends('emails.template')
@section('content')
    <h2>Hello, Sales Manager!</h2>
    <div>
        Full Name: {{ $name }}<br/>
        Email Address: {{ $email }}<br/>
        Phone Number: {{ $phone }}<br/>
        Company Name: {{ $company }}<br/>
        Number of sets/employess: {{ $sets }}<br/>
        How many cards per set: {{ $cards }}<br/>
        Product/Features are interested in: {{ $interest }}<br/>

        Thanks,<br/>
        Rockdesign Team.
    </div>
@stop
