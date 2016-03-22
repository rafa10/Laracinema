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
<body>{{--<body class="white">--}}

<div class="row fadeIn">
    <div class="col s4 offset-s4 valign">

        <div class="card-panel">
            <p class="center"><img src="{{asset('img/cinema-pink.png')}}" alt="logo"></p>
            <h4 class="header2 center">Laracinema</h4>
            <div class="row">
                {{Form::open(array('url' => route('dashboard') , 'method' => 'get')  )}}

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix"></i>
                            {{Form::email('email', null, array('id'=>'email'))}}
                            {{Form::label('email','Email')}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-lock-outline prefix"></i>
                            {{Form::password('password', null, array('id' => 'password3'))}}
                            {{Form::label('password', 'Password')}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s12">
                                {{Form::submit('Log in', array('class' =>'btn cyan waves-effect waves-light right'))}}
                                    {{--<i class="mdi-content-send right"></i>--}}
                                </button>
                            </div>
                        </div>
                    </div>

                {{Form::token()}}
                {{Form::close()}}
            </div>
        </div>

    </div>
</div>





<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="{{asset('js/main.js')}}"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>


</body>
</html>


