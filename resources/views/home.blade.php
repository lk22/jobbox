@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col l3 push-l2">
                <p class="text-center">Hello</p>
            </div>

            <div class="col l3 push-l2">
                <p class="text-center"></p>
            </div>

            <div class="col l3 push-l2">
                <p class="text-center"> {{ auth()->user()->firstname }} </p>
            </div>
        </div>
    </div>

@endsection
