@extends('layouts.master')

@section('title', 'create-actors')

@section('table')
    <div class="row">

        {{Form::open(array('method' => 'post', 'url' => route('actors_store')))}}

        <div class="row">
            <div class="input-field col s6">
                {{Form::label('firstname', 'Firstname')}}
                {{Form::text('firstname', null, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s6">
                {{Form::label('lastname', 'Lastname')}}
                {{Form::text('lastname', '',array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                {{Form::label('dob', 'Dab')}}
                {{Form::date('dob', null, array('class' => 'datepicker'))}}
            </div>
            <div class="input-field col s6">
                {{Form::label('city', 'City')}}
                {{Form::text('city', '', array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                {{Form::label('image', 'Image')}}
                {{Form::text('image', null, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s6">
                {{Form::label('nationality', 'Nationality')}}
                {{Form::text('nationality', '', array('class' => 'validate'))}}
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