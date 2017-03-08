<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }} || Official site</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/csspin.css">
        <link rel="stylesheet" href="/css/welcome.css">
    </head>
    <body id="welcome">
    <!-- 
        loader component
     -->

        <div class="loader">
            <div class="cp-spinner cp-meter"></div>
        </div>
        
        @include('pages._partials.header')

        @yield('page')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script>

            if(!$(document).ready()) 
            {
                $(".loader").show();
            }
            else {
                $(".loader").delay(1500).fadeOut(500);
            }
        </script>
    </body>
</html>
