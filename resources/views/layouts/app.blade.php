<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comunews</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://bootswatch.com/lumen/bootstrap.min.css" rel='stylesheet' type='text/css'>

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
      .navbar-inverse {
        background-color: #454545;
        border-color: #e7e7e7;
      }
      .navbar-inverse .navbar-brand {
        color: #ffffff;
      }
      .navbar-inverse .navbar-brand:hover, .navbar-inverse .navbar-brand:focus {
        color: #a7a7a7;
      }
      .navbar-inverse .navbar-text {
        color: #ffffff;
      }
      .navbar-inverse .navbar-nav > li > a {
        color: #ffffff;
      }
      .navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
        color: #a7a7a7;
      }
      .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
        color: #a7a7a7;
        background-color: #e7e7e7;
      }
      .navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus {
        color: #a7a7a7;
        background-color: #e7e7e7;
      }
      .navbar-inverse .navbar-toggle {
        border-color: #e7e7e7;
      }
      .navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus {
        background-color: #e7e7e7;
      }
      .navbar-inverse .navbar-toggle .icon-bar {
        background-color: #ffffff;
      }
      .navbar-inverse .navbar-collapse,
      .navbar-inverse .navbar-form {
        border-color: #ffffff;
      }
      .navbar-inverse .navbar-link {
        color: #ffffff;
      }
      .navbar-inverse .navbar-link:hover {
        color: #a7a7a7;
      }

      @media (max-width: 767px) {
        .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
          color: #ffffff;
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
          color: #a7a7a7;
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
          color: #a7a7a7;
          background-color: #e7e7e7;
        }
      }


  .fullscreenBackground {
    
    position: fixed;
    width: 100%;
    height: 100%;
    background: url("{{ asset('images/background.jpg') }}") no-repeat center center;
    background-size: cover;
    z-index: -1;
  }

  .thumbnail {
    background-color: rgba(255, 255, 255, 0.7);
  }

  .noticia{
    height:400px;
  }

  img{
    width: 100%;
    height: 100%;
  }

  </style>

</head>
<body id="app-layout">
  
    <div class="fullscreenBackground"></div>

    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Comunews
                </a>



            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Busqueda">
                      </div>
                      <button type="submit" class="btn btn-default">Buscar</button>
                    </form>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                      <li><a href="{{ url('/login') }}">Ingresar</a></li>
                      <li><a href="{{ url('/register') }}">Registrarse</a></li>

                    @endif


                    @if (Auth::check())

                        @yield('navbar')
                    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Desconectarse</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
  <div class="row">

    @yield('sidebar')

    @yield('content')
    
  </div>
</div>
  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  <script type="text/javascript">

  </script>
</body>
</html>

