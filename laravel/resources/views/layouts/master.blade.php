<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8" />
    <title>laracinema - @yield('title') </title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Importmain.css-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<!-- nav -->
<nav>
    <div class="nav-wrapper">
        <a href="{{url('')}}" class="brand-logo pink-text left"><i class="large material-icons">&nbsp;menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><span class="brand-logo pink-text center"><img src="{{asset('img/cinema.png')}}" width="60" height="60"></span></li>

            <li>
                <a href="#" class="waves-effect waves-block waves-light notification-button" data-activates='dropdown'>
                    <i class="small mdi-action-favorite"><small class="notification-badge">{{count(session('key', []))}}</small>
                    </i></a>

                <ul id="dropdown" class="dropdown-content" >
                    <li>
                        <span class="center"> MOVIES CART </span>
                    </li>
                    @foreach(session('key', []) as $value)
                    <li class="divider"></li>
                    <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart pink-text"></i><span class="black-text">{{$value}}</span></a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li><a href="#" class="upper">Sign in</a></li>
            <li><a href="#" class="upper">Sign up</a></li>
        </ul>
    </div>
</nav>

<br/>
<!--end header-->


<!-- content -->
<div class="container ">

    <div class="row general">
        {{-- column left menu--}}
        <div id="leftColumn" class="col s3 white">
            <ul class="collection with-header">
                {{-- column left menu--}}
                <li class="collection-item avatar">
                    <img src="{{asset('img/man.png')}}" alt="" class="circle">
                    <span class="title"><b>Rafa</b></span>
                    <p>Adminstrator
                    </p>
                </li>
                <li class="bold"><a href="{{route('movies_index')}}" class="waves-effect waves-cyan"><i class="small material-icons ">movie</i>Movies</a></li>
                <li class="bold"><a href="{{route('categories_index')}}" class="waves-effect waves-cyan"><i class="small material-icons ">view_module</i>Catégories</a></li>
                <li class="bold"><a href="{{route('actors_index')}}" class="waves-effect waves-cyan"><i class="small material-icons ">supervisor_account</i>Actors</a></li>
                <li class="bold"><a href="{{route('directors_index')}}" class="waves-effect waves-cyan"><i class="small material-icons ">person_pin</i>Directors</a></li>
            </ul>

        </div>

        {{--column right conten--}}
        <div id="rightColumn" class="col s9">
            @yield('table')
        </div>

    </div>

</div>
<!-- end content-->





<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="{{asset('js/main.js')}}"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>


</body>
</html>


