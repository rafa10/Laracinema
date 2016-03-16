@extends('layouts.master')

@section('title', 'create-directors')

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

        {{Form::open(array('method' => 'post', 'url' => route('directors_update', $directors)))}}

        <div class="row">
            <div class="input-field col s12">
                <h4 class="blackk-text center">Update directors</h4>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                {{Form::label('firstname', 'Firstname')}}
                {{Form::text('firstname', $directors->firstname, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s6">
                {{Form::label('lastname', 'Lastname')}}
                {{Form::text('lastname', $directors->lastname,array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                {{Form::label('dob', 'Dab')}}
                {{Form::date('dob', $directors->dob, array('class' => 'datepicker'))}}
            </div>
            <div class="input-field col s6">
                {{Form::label('note', 'Note')}}
                {{Form::text('note', $directors->note, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('image', 'Image')}}
                {{Form::text('image', $directors->image, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('biography', 'Biography')}}
                {{Form::textarea('biography', $directors->biography,array('class' => 'materialize-textarea'))}}
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
