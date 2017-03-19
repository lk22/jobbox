@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col l3 push-l1">
                hello
            </div>

            <div class="col l3 push-l2">
                world
            </div>

            <div class="col l3 push-l2">
                {{ auth()->user()->firstname }}
            </div>
        </div>
    </div>

@endsection
