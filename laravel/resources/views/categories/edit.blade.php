@extends('layouts.master')

@section('title', 'edit-Categories')

@section('table')



    @if(Session::has('update'))
        <div class="row">
            <div class="col s12">
                <div class="card green lighten-4 ">
                    <div class="card-content black-text center">
                        <i class="material-icons">info_outline</i><br>
                        <span>{{ Session::get('update') }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row paddingForm">
        <div class="col s6 white z-depth-1">

        {{Form::open(array('method' => 'post', 'url' => route('categories_update', $categories), 'files'=>true))}}

        <div class="row">
            <div class="input-field col s12">
                <h5 class="black-text  upper">Update categories</h5>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $categories->title, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description', $categories->description, array('class' => 'materialize-textarea'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('slug', 'slug')}}
                {{Form::text('slug', $categories->slug, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="file-field input-field col s12">
                <div class="center">
                    <img id="img" src="{{$categories->image}}" width="90" height="120" alt="uplode image">
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
            <div class="col s12 center">
                {{Form::submit('Envoyer', array('class' => 'btn waves-effect waves-light pink right'))}}

            </div>
        </div>

        {{Form::token()}}
        {{Form::close()}}
       </div>
    </div>

@endsection
