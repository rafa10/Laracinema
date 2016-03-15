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
        <a href="{{url('')}}" class="brand-logo pink-text center">&nbsp;&nbsp;Laracinema</a>
        {{--<ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{route('movies_index')}}">Movies</a></li>
            <li><a href="{{route('categories_index')}}">Catégorie</a></li>
            <li><a href="{{route('directors_index')}}">Directors</a></li>
            <li><a href="{{route('actors_index')}}">Actors</a></li>
        </ul>--}}
    </div>
</nav>

<br/>
<!--end header-->


<!-- content -->
<div class="container ">

    <div class="row general z-depth-1">
        {{-- column left menu--}}
        <div class="col s3 leftColumn white">
            <ul class="collection with-header">
                <li class="collection-header"><h4><i class="material-icons">dashboard</i>Dashboard</h4></li>
                <li class="collection-item"><div class="pink-text">Movies<a href="{{route('movies_index')}}" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                <li class="collection-item"><div class="pink-text">Catégories<a href="{{route('categories_index')}}" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                <li class="collection-item"><div class="pink-text">Actors<a href="{{route('actors_index')}}" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                <li class="collection-item"><div class="pink-text">Directors<a href="{{route('directors_index')}}" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            </ul>

        </div>

        {{--column right conten--}}
        <div class="col s9"><br>
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


