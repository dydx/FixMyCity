<!DOCTYPE html>
<html>
<head>
  <title>Fix My City: Dashboard</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/keen-dashboards.css" />
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Togle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Fix My City: Dashboard Overview</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{ url('/') }}">Home</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
            <li><a href="{{ url('/auth/login') }}">Login</a></li>
            <li><a href="{{ url('/auth/register') }}">Register</a></li>
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
              </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">

    <div class="row">
      <div class="col-sm-3">
        <div class="chart-wrapper">
          <div class="chart-title">
            Cell Title
          </div>
          <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
          </div>
          <div class="chart-notes">
            Notes about this chart
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div class="chart-wrapper">
          <div class="chart-title">
            Cell Title
          </div>
          <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
          </div>
          <div class="chart-notes">
            Notes about this chart
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3">
        <div class="chart-wrapper">
          <div class="chart-title">
            Cell Title
          </div>
          <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
          </div>
          <div class="chart-notes">
            Notes about this chart
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div class="chart-wrapper">
          <div class="chart-title">
            Cell Title
          </div>
          <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
          </div>
          <div class="chart-notes">
            Notes about this chart
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3">
        <div class="chart-wrapper">
          <div class="chart-title">
            Cell Title
          </div>
          <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
          </div>
          <div class="chart-notes">
            Notes about this chart
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div class="chart-wrapper">
          <div class="chart-title">
            Cell Title
          </div>
          <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
          </div>
          <div class="chart-notes">
            Notes about this chart
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3">
        <div class="chart-wrapper">
          <div class="chart-title">
            Cell Title
          </div>
          <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
          </div>
          <div class="chart-notes">
            Notes about this chart
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div class="chart-wrapper">
          <div class="chart-title">
            Cell Title
          </div>
          <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
          </div>
          <div class="chart-notes">
            Notes about this chart
          </div>
        </div>
      </div>
    </div>


    <hr>

    <p class="small text-muted">Built with &#9829; by <a href="https://keen.io">Keen IO</a></p>

  </div>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/holder.js"></script>
  <script>
    Holder.add_theme("white", { background:"#fff", foreground:"#a7a7a7", size:10 });
  </script>

  <script type="text/javascript" src="js/keen.min.js"></script>
  <script type="text/javascript" src="js/meta.js"></script>

</body>
</html>