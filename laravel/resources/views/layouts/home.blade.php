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
        <a href="{{url('')}}" class="brand-logo center">&nbsp;&nbsp;Laracinema</a>
        <!--<ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{route('directors_index')}}">Directors</a></li>
            <li><a href="{{route('categories_index')}}">Catégorie</a></li>
            <li><a href="{{route('movies_index')}}">Movies</a></li>
            <li><a href="{{route('actors_index')}}">Actors</a></li>
        </ul>-->
    </div>
</nav>

<br/>
<!-- content -->

<div class="container ">
    <div class="row general">
        <div class="col s12 ">
            @yield('table')
        </div>
    </div>
</div>

<!-- footer -->
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="black-text">Laracinema</h5>
                <p class="grey-text text-lighten-4">Laracinema est une application web pour les film.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="black-text">Menus</h5>
                <ul>
                    <li><a class="grey-text " href="{{route('directors_index')}}">Directors</a></li>
                    <li><a class="grey-text " href="{{route('categories_index')}}">Catégories</a></li>
                    <li><a class="grey-text " href="{{route('movies_index')}}">Movies</a></li>
                    <li><a class="grey-text " href="{{route('actors_index')}}">Actors</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © {{\Carbon\Carbon::now()->format('Y')}} Copyright
            <a class="grey-text right" href="#!">More Links</a>
        </div>
    </div>
</footer>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="{{asset('js/main.js')}}"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>


</body>
</html>


