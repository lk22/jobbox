<?php
    $auth = auth()->user();
 ?>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} || {{ Auth::user()->name }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
</head>
<body>
    <div id="jobdesk">
        <!-- partials -->
        @include('layouts._partials.header')
        @include('layouts._partials.ethernetComponent')

        <div id="app" class="cyan lighten-5" style="min-height:650px; padding-top:2rem; padding-bottom:2rem; background: #DFEFF9; overflow-x:hidden;">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/jobdesk.js') }}"></script>
</body>
</html>
