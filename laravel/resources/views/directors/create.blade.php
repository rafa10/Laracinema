@extends('layouts.master')

@section('title', 'create-directors')

@section('table')



    <div class="row paddingForm z-depth-1">

        {{Form::open(array('method' => 'post', 'url' => route('directors_store')))}}

        <div class="row">
            <div class="input-field col s12">
                <h4 class="black-text center">Create directors</h4>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                {{Form::label('firstname', 'Firstname')}}
                {{Form::text('firstname', null, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s6">
                {{Form::label('lastname', 'Lastname')}}
                {{Form::text('lastname', null,array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                {{Form::label('dob', 'Dab')}}
                {{Form::date('dob', null, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s6">
                {{Form::label('note', 'Note')}}
                {{Form::text('note', '', array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('image', 'Image')}}
                {{Form::text('image', null, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('biography', 'Biography')}}
                {{Form::textarea('biography', null,array('class' => 'materialize-textarea'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                {{Form::label('roles', 'Roles')}}
                {{Form::text('roles', null,array('class' => 'validate'))}}
            </div>
            <div class="input-field col s6">
                {{Form::label('sulg', 'Sulg')}}
                {{Form::text('sulg', null,array('class' => 'validate'))}}
            </div>
        </div>

        <br>
        <div class="row ">
            <div class="center">
                {{Form::submit('Envoyer', array('class' => 'btn waves-effect waves-light'))}}
            </div>
        </div>
        {{Form::token()}}
        {{Form::close()}}
    </div>

@endsection
