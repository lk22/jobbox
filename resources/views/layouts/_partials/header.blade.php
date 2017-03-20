  <nav id="app-header">
    <div class="nav-wrapper">
      <a href="{{ route('home') }}" class="brand-logo">{{ config('app.name') }}</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
      </ul>
    </div>
  </nav>

  <div class="chip">
    <img src="{{ Auth::user()->avatar }}" alt="Contact Person">
    <li><a href="#">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a></li>
  </div>
