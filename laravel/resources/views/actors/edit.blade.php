@extends('layouts.master')

@section('title', 'movies')


@section('table')





    <div class="row paddingForm">
        <div class="col s6 white z-depth-1">

        {{Form::open(array('method' => 'post', 'url' => route('actors_update', $actors), 'files'=>true))}}

        <div class="row">
            <div class="input-field col s12">
                <h5 class="black-text upper">Update actors</h5>
            </div>
        </div>

        @if(Session::has('update'))
            <div class="row">
                <div class="col s12">
                    <div id="card-alert" class="card green lighten-5">
                        <div class="card-content green-text center">
                            <p><i class="material-icons">error_outline</i> {{Session::get('update')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('firstname', 'Firstname')}}
                {{Form::text('firstname', $actors->firstname,array('class' => 'validate'))}}
            </div>
            <div class="input-field col s12">
                {{Form::label('lastname', 'Lastname')}}
                {{Form::text('lastname', $actors->lastname,array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('dob', 'Dob')}}
                {{Form::date('dob', $actors->dob, array('class' => 'datepicker'))}}
            </div>
            <div class="input-field col s12">
                {{Form::label('city', 'City')}}
                {{Form::text('city', $actors->city, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="file-field input-field col s12">
                <div class="center">
                    <img class="circle" id="img" src="{{$actors->image}}" width="100" height="100" alt="uplode image">
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
            <div class="input-field col s12">
                {{Form::label('roles', 'Roles')}}
                {{Form::text('roles', $actors->roles, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s12">
                {{Form::label('slug', 'Slug')}}
                {{Form::text('slug', $actors->slug, array('class' => 'validate'))}}
            </div>
        </div>

        <br>
        <div class="row ">
            <div class="col s12 center">
                {{Form::submit('Modifier', array('class' => 'btn waves-effect waves-light pink right'))}}
            </div>
        </div>

        {{ csrf_field() }}
        {{Form::close()}}
      </div>
    </div>


@endsection
