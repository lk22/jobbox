<!--
    logged out component
 -->
@if(Session::has('logout_success'))
    <div class="container-fluid alert alert success">
        <h5 class="text-center">{{ Session::get('logout_success') }}</h5>
    </div>
@endif

<!--
    header component
-->
<div class="container-fluid" id="header">

     <div class="col-xs-2 col-sm-2 col-md-1 col-md-offset-1 col-lg-1 col-lg-offset-1">
         <h1 class="navbar-brand brand-name"><a href="{{ route('home') }}">{{ env('APP_NAME') }}</a></h1>
     </div>

    <div class="col-xs-10 col-sm-10 col-md-4 col-md-offset-4 col-lg-3 col-lg-offset-7">

     <ul class="menu-list">
        @if(auth()->user())
            <li class="list-item"><a href="#">{{auth()->user()->firstname}}</a></li>
            <li class="list-item"><a href="{{ route('logout') }}">Logout</a></li>
        @else
             <li class="list-item"><a href="/join">Tilmeld</a></li>
             <li class="list-item"><a href="/signin">login</a></li>
        @endif
        <li class="list-item"><a href="/contact">Kontakt</a></li>
     </ul>

    </div>
</div> <!-- header component end -->
