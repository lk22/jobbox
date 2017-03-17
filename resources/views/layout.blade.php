<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }} || Official site</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/csspin.css">
        <link rel="stylesheet" href="/css/homepage.css">

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRdivLuBDkPNKNhIvjGcT0GHkLG1zSfv8&libraries=places"></script>

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
                        // 'id' => auth()->user()->id,
                        // 'firstname' => auth()->user()->firstname,
                        // 'middlename' => auth()->user()->middlename,
                        // 'lastname' => auth()->user()->lastname,
                        // 'name' => auth()->user()->name,
                        // 'email' => auth()->user()->email,
                        // 'avatar' => auth()->user()->avatar,
                        // 'is_admin' => auth()->users()->is_admin,
                        // 'has_active_email' => auth()->user()->has_active_email,
                        // 'dream_job_title' => auth()->user()->dream_job_title
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
    <body id="layout">

        <!--
            loader component
         -->
        <div class="loader">
            <div class="cp-spinner cp-meter"></div>
        </div>

        @include('pages._partials.header')

        <!--
            page content
        -->
        @yield('page')


        <!--
            footer component
         -->
        @include('pages._partials.footer')

        @include('pages._partials.signinmodal')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/4.3.0/typeit.min.js"></script>
        <script>
            if(!$(document).ready())
            {
                $(".loader").show();
            }
            else {
                $(".loader").delay(500).fadeOut(200);
            }

            $('.headliner').typeIt({
                speed:100,
                autoStart:true,
                loop:true
            }).tiType('Bring orden og kvalitet til din job profil')
              .tiPause(3)
              .tiDelete()
              .tiType('Gem dine ansøgninger hurtigt og nemt')
              .tiPause(2);
        </script>
        <script src="/js/map.js"></script>
    </body>
</html>
