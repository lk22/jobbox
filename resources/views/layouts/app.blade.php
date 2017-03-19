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
    <link rel="stylesheet" href="/css/font-awesome.min.css">

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
                    'id' => auth()->user()->id,
                    'firstname' => auth()->user()->firstname,
                    'middlename' => auth()->user()->middlename,
                    'lastname' => auth()->user()->lastname,
                    'name' => auth()->user()->name,
                    'email' => auth()->user()->email,
                    'avatar' => auth()->user()->avatar,
                    'is_admin' => auth()->user()->is_admin,
                    'has_active_email' => auth()->user()->has_active_email,
                    'dream_job_title' => auth()->user()->dream_job_title,
                ),
                'host' => request()->getHost(),
                'environment' => app()->environment()
            );
            $js_variables = array_merge($default_js_variables, (isset($js_variables)) ? $js_variables : []);
            echo 'var jobdesk = ' . json_encode($js_variables) . ';';
        ?>
        console.log(jobdesk);
    </script>
</head>
<body>
    <div id="jobdesk">
        @include('layouts._partials.header')
        @include('layouts._partials.ethernetComponent')

        <div id="app">

        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/jobdesk.js') }}"></script>

    <script type="text/javascript">
        if(navigator.online === false) {
            $("#ethernetComponent").html('<p>You are currently on any internet connection find a connection and try again</p>');
        }
    </script>
</body>
</html>
