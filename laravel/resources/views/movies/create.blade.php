@extends('layouts.master')

@section('title', 'edit-movies')

@section('table')



    @if($errors->any())
        <div class="row">
            <div class="col s6">
                <div id="card-alert" class="card red lighten-5 ">
                    @foreach($errors->all() as $error)
                        <div class="card-content red-text ">
                            <p><i class="material-icons">error_outline</i>{{ $error }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <div class="row paddingForm">
    <div class="col s6 white z-depth-1">

        <div class="row">
            <div class="input-field col s12">
                <h5 class="black-text  upper">Create Movies</h5>
            </div>
        </div>

        {{Form::open(array('method' => 'post', 'url' => route('movies_store'), 'files'=> true))}}


        <div class="row">
            <div class="input-field col s12">
                {{Form::select('categories_id', $tabCat)}}
                {{Form::label('categories_id', 'Categories')}}
            </div>
        </div>


        <div class="row">
            <div class="input-field col s12">
                {{Form::label('type', 'Type')}}
                {{Form::text('type', null, array('class' => 'validate'))}}
            </div>
            @if($errors->has('type'))
            <div class="col s12">
                <div id="cord-alert" class="card red lighten-4 ">
                    <div class="card-content red-text ">
                        <p><i class="material-icons">error_outline</i>{{ $errors->first('type') }}</p>
                    </div>
                </div>
            </div>
            @endif
            <div class="input-field col s12">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', null, array('class' => 'validate'))}}
            </div>
            @if($errors->has('title'))
                <div class="col s12">
                    <div id="card-alert" class="card red lighten-4 ">
                        <div class="card-content red-text ">
                            <p><i class="material-icons">error_outline</i>{{ $errors->first('title') }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description', null, array('class' => 'materialize-textarea'))}}
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
            <div class="input-field col s12">
                {{Form::label('languages', 'Languages')}}
                {{Form::text('languages', null, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('trailer', 'Trailer')}}
                {{Form::text('trailer', null, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s12">
                {{Form::label('distributeur', 'Distributeur')}}
                {{Form::text('distributeur', null, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('annee', 'Annee')}}
                {{Form::text('annee', null, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s12">
                {{Form::label('bo', 'Bo')}}
                {{Form::select('bo', array(''=>'Choissiez' ,'VO' =>'VO','VOST' => 'VOST', 'VOSTFR' => 'VOSTFR'), null)}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('budget', 'Budget')}}
                {{Form::text('budget', null, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s12">
                {{Form::label('duree', 'Duree')}}
                {{Form::text('duree', null, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('date_release', 'Date_release')}}
                {{Form::date('date_release', null, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s12">
                {{Form::label('note_presse', 'Note_presse')}}
                {{Form::number('note_presse', null, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::radio('visible', 1, false, array('id' => 'visible', 'class'=>'with'))}}
                {{Form::label('visible', 'visible')}}
                {{Form::radio('visible', 0, false, array('id' => 'invisible', 'class'=>'with'))}}
                {{Form::label('invisible', 'invisible')}}
            </div>
            <div class="input-field col s12">
                {{Form::radio('cover', 1, false, array('id' => 'cover', 'class'=>'with'))}}
                {{Form::label('cover', 'Cover')}}
                {{Form::radio('cover', 0, false, array('id' => 'incover', 'class'=>'with'))}}
                {{Form::label('incover', 'incover')}}
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