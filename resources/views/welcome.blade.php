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

        <link rel="stylesheet" href="/css/csspin.css">
        <link rel="stylesheet" href="/css/welcome.css">
    </head>
    <body id="welcome">
    <!-- 
        loader component
     -->

        <div class="loader">
            <div class="cp-spinner cp-meter"></div>
            <h3 class="text-center">Loading...</h3>
        </div>
        
        <!-- 
            header component
         -->
         <div class="container-fluid" id="header">

             <div class="col-xs-2 col-sm-2 col-md-1 col-md-offset-1 col-lg-1 col-lg-offset-1">
                 <h1 class="navbar-brand brand-name"><a href="/">{{ env('APP_NAME') }}</a></h1>
             </div>

             <div class="col-xs-10 col-sm-10 col-md-4 col-md-offset-4 col-lg-3 col-lg-offset-7">

                 <ul class="menu-list">
                     <li class="list-item"><a href="/product">Produkt</a></li>
                     <li class="list-item"><a href="/join">Join os</a></li>
                     <li class="list-item"><a href="/signin">login</a></li>
                     <li class="list-item"><a href="/contact">Kontakt</a></li>
                 </ul>

             </div>
         </div> <!-- header component end -->

         <!-- 
            headline section
          -->
        <div class="container-fluid" id="head-section">
            <div class="row headline-row">
                <h1 class="text-center ">Bring orden og kvalitet til din job profil</h1>
            </div>

            <!-- 
                hidden in mobile and tablet screens
             -->
            <div class="row information">
                <h1 class="text-center headline">Skriv din perfekte ansøgning</h1>
                <h4 class="text-center help">Vi hjælper med Strukturering, korrekt påfylde på din ansøgning</h4>
                <h4 class="text-center help">Med henblik på din personlighed og kvaliteter</h4>
                <h4 class="text-center">Hold orden i dine ansøgninger vi hjælper dig med at gemme dine ansøgninger så du altid ved hvor du har dem</h4>
                <h4 class="text-center join-help"><a href="/join" class="signup-btn">Tilmeld</a> dig nu og og gør dig klar på drømmejobbet</h4>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script>

        $('.loader').show();

            if(!$(document).ready()) 
            {
                $(".loader").show();
            }
            else {
                $(".loader").delay(500).fadeOut(500);
            }
        </script>
    </body>
</html>
