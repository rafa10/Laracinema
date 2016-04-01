@extends('layouts.master')

@section('title', 'create-actors')

@section('table')



    <div class="row paddingForm">
        <div class="col s6 white z-depth-1">

        {{Form::open(array('method' => 'post', 'url' => route('actors_store'), 'files'=>true))}}

        <div class="row">
            <div class="input-field col s12">
                <h5 class="black-text center upper">Create actors</h5>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('firstname', 'Firstname')}}
                {{Form::text('firstname', null, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s12">
                {{Form::label('lastname', 'Lastname')}}
                {{Form::text('lastname', null,array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('dob', 'Dab')}}
                {{Form::date('dob', null, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s12">
                {{Form::label('city', 'City')}}
                {{Form::text('city', null, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="file-field input-field col s12">
                <div class="hide center">
                    <img class="circle" id="img" src="#" width="90" height="90" alt="uplode image">
                </div>
                <div class="btn">
                    <span>Image</span>
                    {{Form::file('image', array('id'=>'imgInp'))}}
                </div>
                <div class="file-path-wrapper">
                    {{Form::text('image', null, array('class' => 'file-path validate'))}}
                </div>
            </div>
            <div class="input-field col s12">
                {{Form::label('nationality', 'Nationality')}}
                {{Form::text('nationality', null, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('biography', 'Biography')}}
                {{Form::textarea('biography', null,array('class' => 'materialize-textarea'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('roles', 'Roles')}}
                {{Form::text('roles', null,array('class' => 'validate'))}}
            </div>
            <div class="input-field col s12">
                {{Form::label('slug', 'Slug')}}
                {{Form::text('slug', null,array('class' => 'validate'))}}
            </div>
        </div>

        <br>
        <div class="row ">
            <div class="col s12 center">
                {{Form::submit('Envoyer', array('class' => 'btn waves-effect waves-light pink right'))}}
            </div>
        </div>
        {{Form::token()}}
        {{Form::close()}}
      </div>
    </div>
@endsection