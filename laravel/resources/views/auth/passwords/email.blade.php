@extends('layouts.app')

<!-- Main Content -->
@section('content')

    <div class="row "><br><br><br><br><br>
        <div class="col s4 offset-s4">
            <div class="card-panel">
                {{--<p class="center"><img src="{{asset('img/cinema-pink.png')}}" width="70" height="70" alt="logo"></p>--}}
                <h5 class="header2 upper center">Reset Password</h5>
                <div class="row">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{Form::open(array('url' => '/password/email' , 'method' => 'post')  )}}

                    <div class="row {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-field col s12">
                            <i class="mdi-communication-email prefix"></i>
                            {{Form::email('email', null, array('id'=>'email'))}}
                            {{Form::label('email','E-Mail Address')}}
                            @if ($errors->has('email'))
                                <span class="help-block red-text">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s12">
                            {{Form::submit('Send Password Reset Link', array('class' =>'btn cyan waves-effect waves-light right'))}}
                            {{--<i class="mdi-content-send right"></i>--}}
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
                {{--<div class="panel-heading">Reset Password</div>--}}
                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">--}}
                        {{--{!! csrf_field() !!}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input type="email" class="form-control" name="email"  value="{{ old('email') }}">--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--<i class="fa fa-btn fa-envelope"></i>Send Password Reset Link--}}
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
