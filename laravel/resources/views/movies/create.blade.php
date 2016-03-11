@extends('layouts.master')

@section('title', 'edit-movies')

@section('table')

    @if($errors->any())
        <div class="row">
            <div class="col s12">
                <div class="card red lighten-4 ">
                    @foreach($errors->all() as $error)
                        <div class="card-content black-text ">
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <div class="row ">

        {{Form::open(array('method' => 'post', 'url' => route('movies_store')))}}

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('type', 'Type')}}
                {{Form::text('type', null,array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', null, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description', null,array('class' => 'materialize-textarea'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('languages', 'Languages')}}
                {{Form::text('languages', null,array('class' => 'validate'))}}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {{Form::label('image', 'Image')}}
                {{Form::text('image', null,array('class' => 'validate'))}}
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