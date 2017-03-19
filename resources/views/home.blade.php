@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col s3 m4">
            hello
        </div>

        <div class="col s3 m4">
            world
        </div>

        <div class="col s3 m4">
            {{ auth()->user()->firstname }}
        </div>
    </div>

@endsection
