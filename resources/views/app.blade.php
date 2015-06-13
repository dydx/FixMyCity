<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fix My City: @yield('page-title')</title>

  <link rel="stylesheet" href="/css/app.css">

</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="{{ url('/' )}}" class="navbar-brand">Fix My City: @yield('page-title')</a>
      </div>

      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" role="button" class="dropdown-toggle">{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Settings</a></li>
              <li class="divider"></li>
              <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
            </ul>
          </li>
        </ul>
        <!-- dont show this if not logged in-->
        <form action="/search-results" method="post" class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="search" id="search" class="form-control">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        @else
          <li><a href="{{ url('/auth/login') }}">Login</a></li>
        @endif
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        @yield('sidebar')
      </div>
      <div class="col-sm-9">
        @yield('content')
      </div>
    </div>
  </div>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>
  <script src="/js/all.js"></script>
</body>
</html>