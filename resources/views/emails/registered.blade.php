@extends('layouts.emails.layout')
@section('mail')
	<!-- content here -->
	<div class="container-fluid message_sended_container">
		<h2>Hello {{ $user->firstname }} {{ $user->lastname }}</h2>
		<br>
		<h5>Thanks for Joining us here at JobDesk.</h5>
		<h5>We hope that u will enjoy using our service</h5>
		<h5>and looking forward to start your journey getting your dreamjob.</h5>
		<br>
		<h6>Thanks again</h6>
		<br>
		<h6>Leo Knudsen <br> CTO Co-Founder <br> JobDesk ApS</h6>
	</div>
@stop