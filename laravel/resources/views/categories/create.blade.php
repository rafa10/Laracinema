@extends('layouts.master')

@section('title', 'Create-Categories')

@section('table')



    <div class="row paddingForm">
        <div class="col s6 white z-depth-1">

        {{Form::open(array('method' => 'post', 'url' => route('categories_store'), 'files'=>true))}}

            <div class="row">
                <div class="input-field col s12">
                    <h5 class="black-text center upper">Create categories</h5>
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
                <div class="file-field input-field col s12">
                    <div class="hide center">
                        <img id="img" src="#" width="90" height="120" alt="uplode image">
                    </div>
                    <div class="btn">
                        <span>Image</span>
                        {{Form::file('image', array('id'=>'imgInp'))}}
                    </div>
                    <div class="file-path-wrapper">
                        {{Form::text('image', null, array('class' => 'file-path validate'))}}
                    </div>
                </div>
            </div>

            <br>
            <div class="row ">
                <div class=" col s12 center">
                    {{Form::submit('Envoyer', array('class' => 'btn waves-effect waves-light right pink '))}}
                </div>
            </div>

        {{Form::token()}}
        {{Form::close()}}
      </div>
    </div>

@endsection
