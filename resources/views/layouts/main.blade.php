<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo','MDS')</title>
    <link rel="stylesheet" href="{{elixir('css/all.css')}}">
    @yield('css')

    <!--[if lt IE 9]>
      {{--
      <script src="{{url('js/html5shiv.min.js')}}"></script>
      <script src="{{url('js/respond.min.js')}}"></script>
      --}}
      <script src="{{elixir('js/ie.js')}}"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="{{url('img/logo32.png')}}" alt="logo MDS" />
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">A2</a></li>
            <li class="dropdown open">
              <a aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider" role="separator"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">A3</a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    {{--
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu Item <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#">bla 1</a></li>
        <li class="divider"></li>
        <li><a href="#">foo 1</a></li>
      </ul>
    </li>
    --}}
    <div class='container'>
      @yield('container')
    </div>
    {{--
    <script src="{{url('js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    --}}
    <script src="{{elixir('js/all.js')}}"></script>
    @yield('js')
  </body>
</html>
