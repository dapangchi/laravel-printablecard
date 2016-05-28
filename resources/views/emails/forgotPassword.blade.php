@extends('emails.template')
@section('content')
	<h2>Password Reset</h2>

	<div>
		To reset your password, complete this form: 
        <a href="{{ route('customer.reset', [$token]) }}">{{ route('customer.reset', [$token]) }}</a>.<br /> 
        This link will expire in 60 minutes.<br/>

		Thanks,<br/>
		Rockdesign Team.
	</div>
@stop