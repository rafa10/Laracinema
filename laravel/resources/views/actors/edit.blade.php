@extends('layouts.master')

@section('title', 'movies')


@section('table')

    @if(Session::has('update'))
        <div class="row">
            <div class="col s12">
                <div class="card green lighten-4 ">
                    <div class="card-content black-text center">
                        <span>{{ Session::get('update') }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row">

        {{Form::open(array('method' => 'post', 'url' => route('actors_update', $actors)))}}

        <div class="row">
            <div class="input-field col s6">
                {{Form::label('firstname', 'Firstname')}}
                {{Form::text('firstname', $actors->firstname,array('class' => 'validate'))}}
            </div>
            <div class="input-field col s6">
                {{Form::label('lastname', 'Lastname')}}
                {{Form::text('lastname', $actors->lastname,array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                {{Form::label('dob', 'Dob')}}
                {{Form::date('dob', $actors->dob, array('class' => 'datepicker'))}}
            </div>
            <div class="input-field col s6">
                {{Form::label('city', 'City')}}
                {{Form::text('city', $actors->city, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                {{Form::label('image', 'Image')}}
                {{Form::text('image', $actors->image, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s6">
                {{Form::label('nationality', 'Nationality')}}
                {{Form::text('nationality', $actors->nationality, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('biography', 'Biography')}}
                {{Form::textarea('biography', $actors->biography, array('class' => 'materialize-textarea'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                {{Form::label('roles', 'Roles')}}
                {{Form::text('roles', $actors->roles, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s6">
                {{Form::label('slug', 'Slug')}}
                {{Form::text('slug', $actors->slug, array('class' => 'validate'))}}
            </div>
        </div>

        <br>
        <div class="row ">
            <div class="center">
                {{Form::submit('Modifier', array('class' => 'btn waves-effect waves-light'))}}
            </div>
        </div>

        {{ csrf_field() }}
        {{Form::close()}}
    </div>


@endsection
