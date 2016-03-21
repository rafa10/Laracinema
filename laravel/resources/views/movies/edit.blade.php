@extends('layouts.master')

@section('title', 'edit-movies')

@section('table')


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

    <div class="row paddingForm">
        <div class="col s6 white z-depth-1">

        {{Form::open(array('method' => 'post', 'url' => route('movies_update', $movies)))}}

            <div class="row">
                <div class="input-field col s12">
                    <h5 class="black-text center upper">Update Movies</h5>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::select('categories_id', $tabCat, $movies->categories_id)}}
                    {{Form::label('categories_id', 'Categories')}}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('type', 'Type')}}
                    {{Form::text('type', $movies->type, array('class' => 'validate'))}}
                </div>
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
                <div class="input-field col s12">
                    {{Form::label('image', 'Image')}}
                    {{Form::text('image', $movies->image, array('class' => 'validate'))}}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('trailer', 'Trailer')}}
                    {{Form::text('trailer', $movies->trailer, array('class' => 'validate'))}}
                </div>
                <div class="input-field col s12">
                    {{Form::label('distributeur', 'Distributeur')}}
                    {{Form::text('distributeur', $movies->distributeur, array('class' => 'validate'))}}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('annee', 'Annee')}}
                    {{Form::text('annee', $movies->annee, array('class' => 'validate'))}}
                </div>
                <div class="input-field col s12">
                    {{Form::label('bo', 'Bo')}}
                    {{Form::select('bo', array('VO' =>'VO','VOST' => 'VOST', 'VOSTFR' => 'VOSTFR'), $movies->bo,  array('class' => 'validate'))}}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::label('budget', 'Budget')}}
                    {{Form::text('budget', $movies->budget, array('class' => 'validate'))}}
                </div>
                <div class="input-field col s12">
                    {{Form::label('duree', 'Duree')}}
                    {{Form::text('duree', $movies->duree, array('class' => 'validate'))}}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    {{Form::date('date_release', $movies->date_release, array('class' => ''))}}
                    {{Form::label('date_release', 'Date_release')}}
                </div>
                <div class="input-field col s6">
                    {{Form::label('note_presse', 'Note_presse')}}
                    {{Form::number('note_presse', $movies->note_presse, array('class' => 'validate'))}}
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
