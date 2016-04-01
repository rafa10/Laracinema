@extends('layouts.master')

@section('title', 'contact')

@section('table')


    <div class="row paddingForm">
        <div class="col s6 white z-depth-1">

            {{Form::open(array('url' => route('send.email'), 'method' => 'post'))}}

            <div class="row">
                <div class="input-field col s12">
                    <h5 class="black-text center upper">Contact</h5>
                </div>
            </div>

            @if(Session::has('mail'))
                <div class="row">
                    <div class="col s12">
                        <div id="card-alert" class="card green lighten-5">
                            <div class="card-content green-text center">
                                <p><i class="material-icons">error_outline</i> {{Session::get('mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row {{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="mdi-action-account-circle prefix"></i>
                    {{Form::text('name', null, array('id'=>'name'))}}
                    {{Form::label('name','Name')}}
                    @if ($errors->has('name'))
                        <span class="help-block red-text">
                            <strong><i class="mdi-alert-warning"></i>{{ $errors->first('name') }}</strong>
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
                            <strong><i class="mdi-alert-warning"></i>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row {{ $errors->has('subject') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="mdi-action-subject prefix"></i>
                    {{Form::text('subject', null, array('id'=>'subject'))}}
                    {{Form::label('subject','Subject')}}
                    @if ($errors->has('subject'))
                        <span class="help-block red-text">
                            <strong><i class="mdi-alert-warning"></i>{{ $errors->first('subject') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row {{ $errors->has('message') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="mdi-action-question-answer prefix"></i>
                    {{Form::textarea('message', null, array('class'=>'materialize-textarea'))}}
                    {{Form::label('message','Message')}}
                    @if ($errors->has('message'))
                        <span class="help-block red-text">
                            <strong><i class="mdi-alert-warning"></i>{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="row">
                <div class="input-field col s12">
                    {{Form::submit('Send', array('class' =>'btn pink waves-effect waves-light right'))}}
                </div>
            </div>

            {{Form::token()}}
            {{Form::close()}}
        </div>
    </div>

@endsection
