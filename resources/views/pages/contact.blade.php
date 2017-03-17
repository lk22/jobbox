@extends('layout')
@section('page')

	<div class="container" id="contact">
	<h2 class="text-center">
		Kom i kontakt med os
	</h2>
	<br>
	@if(Session::has('success'))
		<div class="alert alert-success"><p class="text-center">{{ Session::get('success') }} <a href="/">klik her</a> for at går tilbage</p></div>
	@endif
		<form action="" method="post" class="col-md-6 col-md-offset-3">
			{!! csrf_field() !!}
			<div class="form-group col-md-6">
				<input type="text" name="firstname" class="form-control"  placeholder="Fornavn...">
			</div>

			<div class="form-group col-md-6">
				<input type="text" name="lastname" class="form-control"  placeholder="Efternavn...">
			</div>

			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="email">
			</div>

			<div class="form-group">
				<textarea name="message" id="" class="form-control" cols="30" rows="10" placeholder="Besked..."></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Send</button>
			</div>
		</form>
	</div>

@stop