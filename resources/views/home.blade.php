@extends('layouts.app')

@section('content')

    <div class="container">
        <p class="flow-text">hello {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
    </div>

@endsection
