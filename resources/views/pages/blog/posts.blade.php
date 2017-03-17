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
							<img class="img img-thumbnail" height="250" width="100%" src="{{ $post->post_cover }}" alt="">
						</div>
						<div class="row blog_post__title">
							<h4 class="text-center">{{ $post->title }}</h4>
						</div>
						<div class="row blog_post_description">
							<h4 class="text-center">{{ substr($post->body, 0, 50) }}...</h4>
							<h5 class="text-center">Published by {{ $post->user->name }}</h5>
						</div>
					</div>
				@endforeach
			@endif
		</div>
		<div class="row">
			@if(!auth()->user()) <h4><a href="#signinModal" data-toggle="modal" data-target="#signinModal">Login</a> for at offentliggøre opslag <small> <u>du skal være ansat hos JobDesk ApS</u> </small></h4> 
			@elseif(!auth()->user()->is_admin) <h4>Kun Nyheds beskrivere og administratorer har adgang til at skrive artikler <a href="#">søg om </a></h4> 
			@else <h4><a href="#addPostModal" class="btn btn-primary">Publish Post</a></h4> @endif 
		</div>
	</div>

@stop