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
        <div class="col s12 white z-depth-1">

        {{Form::open(array('method' => 'post', 'url' => route('categories_update', $categories)))}}

        <div class="row">
            <div class="input-field col s12">
                <h4 class="black-text center">Update categories</h4>
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
            <div class="input-field col s12">
                {{Form::label('image', 'Image')}}
                {{Form::text('image', $categories->image, array('class' => 'validate'))}}
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
    </div>

@endsection
