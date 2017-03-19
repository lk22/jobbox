@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col l3">
                hello
            </div>

            <div class="col l3">
                world
            </div>

            <div class="col l3">
                {{ auth()->user()->firstname }}
            </div>
        </div>
    </div>

@endsection
