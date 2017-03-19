@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col s3 ">
            hello
        </div>

        <div class="col s3">
            world
        </div>

        <div class="col s3">
            {{ auth()->user()->firstname }}
        </div>
    </div>

@endsection
