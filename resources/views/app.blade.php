<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fix My City</title>

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
        <a href="{{ url('/' )}}" class="navbar-brand">Fix My City</a>
      </div>

      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li><a href="{{ url('/auth/login' ) }}">Login</a></li>
        @else
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
            <input type="text" placeholder="Search" name="search" id="search" class="form-control">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        @endif
      </div>
    </div>
  </nav>

  @yield('content')

  <script src="/js/all.js"></script>
</body>
</html>