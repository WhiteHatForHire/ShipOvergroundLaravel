{{--  <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/reviews">Reviews</a></li>
        <li><a href="/create">Create</a></li>
      </ul>
    </div>
  </nav>
</div>  --}}
@if (Auth::check())
<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
    <li class="divider" tabindex="-1"></li>
    <li class="divider" tabindex="-1"></li>
    <li class="divider" tabindex="-1"></li>
    <li class="divider" tabindex="-1"></li>
    <li class="divider" tabindex="-1"></li>
    <li class="divider" tabindex="-1"></li>
    <li class="divider" tabindex="-1"></li>
    <li class="divider" tabindex="-1"></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="/">Profile</a></li>
    <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{route('logout')}}">Logout</a></li>
  </ul>
<nav>
  <div class="nav-wrapper light-blue darken-4">
    <div class="row">
        <a href="/" class="brand-logo">SHIP OVERGROUND</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/autocomplete">Search</a></li>
          <li><a href="/reviews">Reviews</a></li>
          <li><a href="/professors">Professors</a></li>
           <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
   
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <li><a href="/reviews">Reviews</a></li>
  <li><a href="/create">Create</a></li>
  <li><a href="/professors">Professors</a></li>
  <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{route('logout')}}">Logout</a></li>
</ul>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

@else
<nav>
  
  <div class="nav-wrapper light-blue darken-4">
    <a href="/" class="brand-logo">SHIP OVERGROUND</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Register</a></li>
    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="/login">Login</a></li>
    <li><a href="/register">Register</a></li>
    <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{route('logout')}}"></a></li>
  </ul>
@endif

          