@extends('layout')
@section('page')

	<div class="container" id="blog">
		<div class="row">
			@if($posts)
				@foreach($posts as $post)
					<div class="col-md-4 blog_post">
						<div class="row blog_post__cover">
							<div class="overlay">
								<a href="{{ route('post', $post->id) }}" class="btn btn-success">Læs Artikel</a>
							</div>
							<img height="250" width="100%" src="{{ $post->post_cover }}" alt="">
						</div>
						<div class="row blog_post__title">
							<h4>{{ $post->title }}</h4>
						</div>
						<div class="row blog_post_description">
							<h4>{{ substr($post->body, 0, 50) }}</h4>
							<h5>Published by {{ $post->user->name }}</h5>
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</div>

@stop