@extends('layouts.master')

@section('title', 'Create-Categories')

@section('table')

    @if(Session::has('update'))
        <div class="row">
            <div class="col s12">
                <div class="card green lighten-4 ">
                    <div class="card-content black-text center">
                        <i class="material-icons">info_outline</i><br>
                        <span>{{ Session::get('update') }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <div class="row paddingForm">
        <div class="col s6 white z-depth-1">

            {{Form::open(array('url' => route('account.update', $admin) , 'method' => 'post', 'files'=> true)  )}}

            <div class="row">
                <div class="input-field col s12">
                    <h5 class="black-text center upper">Update Account</h5>
                </div>
            </div>

            <div class="row">
                <div class="file-field input-field col s12">
                    <div class="center">
                        <img class="circle" id="img" src="{{$admin->photo}}" width="100" height="100" alt="uplode image">
                    </div>
                    <div class="btn">
                        <span>Photo</span>
                        {{Form::file('photo', array('id'=>'imgInp'))}}
                    </div>
                    <div class="file-path-wrapper">
                        {{Form::text('photo', null, array('class' => 'file-path validate'))}}
                        {{Form::label('photo', 'Changer photo')}}
                    </div>
                </div>
            </div>

            <div class="row {{ $errors->has('lastname') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="mdi-action-account-circle prefix"></i>
                    {{Form::text('lastname', $admin->lastname, array('id'=>'lastname'))}}
                    {{Form::label('lastname','Lastname')}}
                    @if ($errors->has('lastname'))
                        <span class="help-block red-text">
                            <strong><i class="mdi-alert-warning"></i>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row {{ $errors->has('firstname') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="mdi-action-account-circle prefix"></i>
                    {{Form::text('firstname', $admin->firstname, array('id'=>'firstname'))}}
                    {{Form::label('firstname','Firstname')}}
                    @if ($errors->has('firstname'))
                        <span class="help-block red-text">
                            <strong><i class="mdi-alert-warning"></i>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row {{ $errors->has('description') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="mdi-action-question-answer prefix"></i>
                    {{Form::textarea('description', $admin->description, array('class'=>'materialize-textarea'))}}
                    {{Form::label('description','Description')}}
                    @if ($errors->has('description'))
                        <span class="help-block red-text">
                            <strong><i class="mdi-alert-warning"></i>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row {{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="mdi-communication-email prefix"></i>
                    {{Form::email('email', $admin->email, array('id'=>'email'))}}
                    {{Form::label('email','Email')}}
                    @if ($errors->has('email'))
                        <span class="help-block red-text">
                            <strong><i class="mdi-alert-warning"></i>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::submit('Register', array('class' =>'btn pink waves-effect waves-light right'))}}
                    {{--<i class="mdi-content-send right"></i>--}}
                </div>
            </div>

            {{Form::token()}}
            {{Form::close()}}
        </div>
    </div>

@endsection
