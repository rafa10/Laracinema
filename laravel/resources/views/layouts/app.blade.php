<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>laracinema - @yield('title') </title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Importmain.css-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    {{--import css animate--}}
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body id="app-layout">

<!-- nav -->
    <nav class="header">
        <div class="nav-wrapper">
            <a href="{{url('')}}" class="brand-logo pink-text left">&nbsp;Laracinema</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><span class="brand-logo pink-text center"><img src="{{asset('img/cinema.png')}}" width="60" height="60"></span></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                <li><a class="upper" href="{{ url('/login') }}">Login</a></li>
                <li><a class="upper" href="{{ url('/register') }}">Register</a></li>
                @else
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
                </li>
                @endif
            </ul>
        </div>
    </nav>



    @yield('content')

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!--link file js personnel -->
    <script src="{{asset('js/main.js')}}"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
</html>
