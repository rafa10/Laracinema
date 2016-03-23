@extends('layouts.app')

@section('content')

    <div class="row "><br><br><br><br><br>
        <div class="col s4 offset-s4">
            <div class="card-panel">
                {{--<p class="center"><img src="{{asset('img/cinema-pink.png')}}" width="70" height="70" alt="logo"></p>--}}
                <h5 class="header2 upper center">Login</h5>
                <div class="row">
                    {{Form::open(array('url' => '/login' , 'method' => 'post')  )}}

                    <div class="row {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix"></i>
                            {{Form::email('email', null, array('id'=>'email'))}}
                            {{Form::label('email','Email')}}
                            @if ($errors->has('email'))
                                <span class="help-block red-text">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-field col s12">
                            <i class="mdi-action-lock-outline prefix"></i>
                            {{Form::password('password', null, array('id' => 'password3'))}}
                            {{Form::label('password', 'Password')}}
                            @if ($errors->has('password'))
                                <span class="help-block red-text">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            {{Form::checkbox('remember', 1, false,array('id'=>'remember'))}}
                            {{Form::label('remember', 'Remember Me')}}
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s12">
                            {{Form::submit('Log in', array('class' =>'btn cyan waves-effect waves-light right'))}}
                            {{--<i class="mdi-content-send right"></i>--}}
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 center">
                            <a class="" href="{{ url('/password/reset') }}">Forgot Your Password ?</a>
                        </div>
                    </div>

                    {{Form::token()}}
                    {{Form::close()}}
                </div>
            </div>

        </div>
    </div>
{{--<div class="container">--}}
    {{----}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">--}}
                        {{--{!! csrf_field() !!}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input type="email" class="form-control" name="email" value="{{ old('email') }}">--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input type="password" class="form-control" name="password">--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember"> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--<i class="fa fa-btn fa-sign-in"></i>Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
