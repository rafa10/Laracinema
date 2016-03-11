@extends('layouts.master')

@section('title', 'Create-Categories')

@section('table')

    <div class="row">

        {{Form::open(array('method' => 'post', 'url' => route('categories_store')))}}

            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', null, array('class' => 'validate'))}}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', null, array('class' => 'materialize-textarea'))}}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('slug', 'slug')}}
                    {{Form::text('slug', null, array('class' => 'validate'))}}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('image', 'Image')}}
                    {{Form::text('image', null, array('class' => 'validate'))}}
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
