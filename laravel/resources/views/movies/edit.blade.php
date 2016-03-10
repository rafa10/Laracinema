@extends('layouts.master')

@section('title', 'edit-movies')

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

        {{Form::open(array('method' => 'post', 'url' => route('movies_update', $movies)))}}
            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('type', 'Type')}}
                    {{Form::text('type', $movies->type, array('class' => 'validate'))}}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', $movies->title, array('class' => 'validate'))}}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', $movies->description, array('class' => 'materialize-textarea'))}}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('languages', 'Languages')}}
                    {{Form::text('languages', $movies->languages, array('class' => 'validate'))}}
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('image', 'Image')}}
                    {{Form::text('image', $movies->image, array('class' => 'validate'))}}
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
