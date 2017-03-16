@extends('layout')
@section('page')

	<div class="container" id="blog">
		<div class="row">
			@if($posts)
				@foreach($posts as $post)
					<div class="col-md-4 post">
						<div class="row post__cover">
						<div class="overlay">
							<div class="row">
								<a href="{{ route('post', $post->id) }}" class="btn btn-success">Læs artikel</a>
							</div>
						</div>
							<img src="{{$post->post_cover}}" alt="{{$post->post_cover}}">
						</div>
						<div class="row post__title">
							<h4>{{ $post->title }}</h4>
						</div>
						<div class="row post__description">
							<h4>{{ substr($post->body, 0, 100) }}</h4>
							<br>
							<p>Published by: {{$post->user->name}}</p>
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</div>

@stop