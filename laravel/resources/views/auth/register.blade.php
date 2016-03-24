@extends('layouts.app')

@section('content')

    <div class="row "><br><br><br><br><br>
        <div class="col s4 offset-s4">
            <div class="card-panel">
                {{--<p class="center"><img src="{{asset('img/cinema-pink.png')}}" width="70" height="70" alt="logo"></p>--}}
                <h5 class="header2 upper center">Register</h5>
                <div class="row">
                    {{Form::open(array('url' => '/register' , 'method' => 'post', 'files'=> true)  )}}


                    <div class="row">
                        <div class="file-field input-field col s12">
                            <div class="hide center">
                                <img class="circle" id="img" src="#" width="70" height="70" alt="uplode image">
                            </div>
                            <div class="btn black">
                                <span>Photo</span>
                                {{Form::file('photo', array('id'=>'imgInp'))}}
                            </div>
                            <div class="file-path-wrapper">
                                {{Form::text('photo', null, array('class' => 'file-path validate'))}}
                            </div>
                        </div>
                    </div>
                    <div class="row {{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix"></i>
                            {{Form::text('lastname', null, array('id'=>'lastname'))}}
                            {{Form::label('lastname','Lastname')}}
                            @if ($errors->has('lastname'))
                                <span class="help-block red-text">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row {{ $errors->has('firstname') ? ' has-error' : '' }}">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix"></i>
                            {{Form::text('firstname', null, array('id'=>'firstname'))}}
                            {{Form::label('firstname','Firstname')}}
                            @if ($errors->has('firstname'))
                                <span class="help-block red-text">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row {{ $errors->has('description') ? ' has-error' : '' }}">
                        <div class="input-field col s12">
                            <i class="mdi-action-question-answer prefix"></i>
                            {{Form::textarea('description', null, array('class'=>'materialize-textarea'))}}
                            {{Form::label('description','Description')}}
                            @if ($errors->has('description'))
                                <span class="help-block red-text">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-field col s12">
                            <i class="mdi-communication-email prefix"></i>
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
                            {{Form::password('password', null, array('id' => 'password'))}}
                            {{Form::label('password', 'Password')}}
                            @if ($errors->has('password'))
                                <span class="help-block red-text">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <div class="input-field col s12">
                            <i class="mdi-action-lock-outline prefix"></i>
                            {{Form::password('password_confirmation', null, array('id' => 'password_confirmation'))}}
                            {{Form::label('password_confirmation', 'Confirm Password')}}
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block red-text">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s12">
                            {{Form::submit('Register', array('class' =>'btn cyan waves-effect waves-light right'))}}
                            {{--<i class="mdi-content-send right"></i>--}}
                            </button>
                        </div>
                    </div>

                    {{Form::token()}}
                    {{Form::close()}}
                </div>
            </div>

        </div>
    </div>



{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">--}}
                        {{--{!! csrf_field() !!}--}}

                        {{--<div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">--}}
                            {{--<label class="col-md-4 control-label">Lastname</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input type="text" class="form-control" name="name" value="{{ old('lastname') }}">--}}

                                {{--@if ($errors->has('lastname'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('lastname') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">--}}
                            {{--<label class="col-md-4 control-label">Firstname</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input type="text" class="form-control" name="name" value="{{ old('firstname') }}">--}}

                                {{--@if ($errors->has('firstname'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('firstname') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

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

                        {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
                            {{--<label class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input type="password" class="form-control" name="password_confirmation">--}}

                                {{--@if ($errors->has('password_confirmation'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--<i class="fa fa-btn fa-user"></i>Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

@endsection
