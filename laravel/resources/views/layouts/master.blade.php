<!DOCTYPE html>
<html>
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
<body>
<!-- nav -->

<nav class="header">
    <div class="nav-wrapper">
        <a href="{{url('')}}" class="brand-logo pink-text left">&nbsp;Laracinema</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><span class="brand-logo pink-text center"><img src="{{asset('img/cinema.png')}}" width="60" height="60"></span></li>

            <li>
                <a href="#" class="waves-effect waves-block waves-light notification-button" data-activates='dropdown'>
                    <i class="small mdi-action-favorite"><small class="notification-badge">{{count(session('key', []))}}</small></i></a>
                @if (!empty(session('key', [])) )
                    <ul id="dropdown" class="dropdown-content" >
                        <li>
                            <span class="center"> MOVIES CART
                            <a href="{{route('destroyAllCart')}}" id="btn-close"><i class="small mdi-action-delete black-text "></i></a>
                            </span>
                        </li>
                        @foreach(session('key', []) as $key => $value)
                        <li class="divider"></li>
                        <li>
                            <a>
                                <i class="mdi-action-add-shopping-cart pink-text"></i>
                                <span class="black-text">{{$value}}</span>
                            </a>
                            <span class="btn-close"><a href="{{route('destroyCart', $key)}}" ><i class="small mdi-navigation-close black-text "></i></a></span>
                        </li>
                        @endforeach
                    </ul>
                @else
                    <ul id="dropdown" class="dropdown-content" >
                        <li>
                            <span class="center"> MOVIES CART</span>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#!" class="red">
                                <i class="mdi-action-add-shopping-cart red-text"></i>
                                <span class="black-text">Le panier est vide</span>
                            </a>
                        </li>
                    </ul>
                @endif
            </li>
            <li><a href="#" class="upper"><i class="material-icons">movie</i></a></li>
            <li><a href="#" class="upper"><i class="material-icons">language</i></a></li>
            <li><a class='dropdown-button upper' href='#' data-activates='dropdown1'><i class="mdi-action-account-circle"></i></a>
                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a class="center" href="{{route('account.profile')}}"><i class="mdi-action-face-unlock"></i>Profile</a></li>
                    <li><a class="center" href="{{route('account.settings')}}"><i class="mdi-action-settings"></i>Settings</a></li>
                    <li><a class="center" href="{{route('account.change_password')}}"><i class="mdi-action-lock-outline prefix"></i>Password</a></li>
                    <li class="divider"></li>
                    <li><a class="center" href="{{url('/logout')}}"><i class="mdi-hardware-keyboard-tab"></i>Logout</a></li>
                </ul>
            </i>
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

            <div class="row"><!--form search-->
                <div class="col s12"><br>
                    <nav>
                        <div class="nav-wrapper">
                            <form>
                                <div class="input-field white">
                                    <input id="search" type="search" required>
                                    <label for="search"><i class="material-icons black-text ">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row"><!-- display admin and avatar-->
                <div class="col s12">
                    <ul class="collection with-header">
                        <li class="collection-item avatar">
                            <img src="{{Auth::user()->photo}}" alt="" class="circle">
                            <span class="title"><b>{{Auth::user()->lastname}}&nbsp;{{Auth::user()->firstname}}</b></span>
                            <p>Administrator</p>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </div>
            </div>


            <div class="row">{{-- left menu dashboard--}}
                <div class="col s12">
                    <ul>
                        <li class="bold"><a href="{{route('movies_index')}}" class="waves-effect waves-cyan"><i class="small material-icons ">movie</i>Movies</a></li>
                        <li class="bold"><a href="{{route('categories_index')}}" class="waves-effect waves-cyan"><i class="small material-icons ">view_module</i>Catégories</a></li>
                        <li class="bold"><a href="{{route('actors_index')}}" class="waves-effect waves-cyan"><i class="small material-icons ">supervisor_account</i>Actors</a></li>
                        <li class="bold"><a href="{{route('directors_index')}}" class="waves-effect waves-cyan"><i class="small material-icons ">person_pin</i>Directors</a></li>
                    </ul>
                </div>
            </div>
        </div>

        {{--column right conten--}}
        <div id="rightColumn" class="col s9">
            @yield('table')
        </div>

    </div>

</div>
<!-- end content-->





<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!--link file js personnel -->
<script src="{{asset('js/main.js')}}"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>


</body>
</html>


