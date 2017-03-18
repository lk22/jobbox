<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        <?php
            $default_js_variables = array(
                'csrf' => csrf_token(),
                'url' => Config::get("app.url"),
                'current_url' => request()->url(),
                'auth' => array(
                    'id' => Auth::user()->id,
                    'firstname' => Auth::user()->firstname,
                    'middlename' => Auth::user()->middlename,
                    'lastname' => Auth::user()->lastname,
                    'name' => Auth::user()->name,
                    'email' => Auth::user()->email,
                    'avatar' => Auth::user()->avatar,
                    'is_admin' => Auth::users()->is_admin,
                    'has_active_email' => Auth::user()->has_active_email,
                    'dream_job_title' => Auth::user()->dream_job_title
                ),
                'host' => request()->getHost(),
                'environment' => app()->environment()
            );
            $js_variables = array_merge($default_js_variables, (isset($js_variables)) ? $js_variables : []);
            echo 'var JobDesk = ' . json_encode($js_variables) . ';';
        ?>
        console.log(JobDesk);
    </script>
</head>
<body>
    <div id="app">
        @include('layouts._partials.header')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/jobdesk.js') }}"></script>
</body>
</html>
