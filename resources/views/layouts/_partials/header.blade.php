  <nav class="container-fluid" id="app-header">
    <div class="nav-wrapper">
      <a href="{{ route('home') }}" class="brand-logo">{{ config('app.name') }}</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>
            <div class="chip" style="background:none;">
              <img src="{{ Auth::user()->avatar }}" alt="Contact Person">
              <a style="display:inline" href="{{ route('home') }}">{{ Auth::user()->firstname }}</a>
            </div>
        </li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
      </ul>
    </div>
  </nav>
