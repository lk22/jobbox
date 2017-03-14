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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/4.3.0/typeit.min.js"></script>
        <script>
            if(!$(document).ready()) 
            {
                $(".loader").show();
            }
            else {
                $(".loader").delay(500).fadeOut(500);
            }

            $('.headliner').typeIt({
                speed:100,
                autoStart:true
            }).tiType('Bring orden og kvalitet til din job profil')
              .tiBreak()
              .tiBreak()
              .tiSettings({speed: 100})
              .tiType('Gem dine Ansøgninger hurtigt og nemt');
        </script>
        <script src="/js/map.js"></script>
    </body>
</html>
