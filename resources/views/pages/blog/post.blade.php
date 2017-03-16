@extends('layout')
@section('page')

	@if($post)
		<div class="container-fluid" id="post">

			<div class="row post__cover">
				<img src="{{ $post->post_cover }}" alt="">
			</div>
			<div class="row post__info">
				<h1 class="text-center">{{$post->title}}</h1>
				<h3 class="text-center">Published by {{$post->user->name}} - published at {{ $post->created_at }}</h3>
			</div>

			<div class="row post_description">
				<p class="text-center">{{ $post->body }}</p>

				<div class="row">
					<a href="{{ route('posts') }}">Gå tilbage</a>
				</div>
			</div>
			
		</div>

		{{-- {{ dd($post->post_cover) }} --}}
	@endif

@stop