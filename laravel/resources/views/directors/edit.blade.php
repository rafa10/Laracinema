@extends('layouts.master')

@section('title', 'create-directors')

@section('table')



    <div class="row paddingForm">
        <div class="col s6 white z-depth-1">

        {{Form::open(array('method' => 'post', 'url' => route('directors_update', $directors), 'files'=>true))}}

        <div class="row">
            <div class="input-field col s12">
                <h5 class="blackk-text  upper">Update directors</h5>
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
                {{Form::text('firstname', $directors->firstname, array('class' => 'validate'))}}
            </div>
            <div class="input-field col s12">
                {{Form::label('lastname', 'Lastname')}}
                {{Form::text('lastname', $directors->lastname,array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {{Form::date('dob', $directors->dob, array('class' => 'validate'))}}
                {{Form::label('dob', 'Dab')}}
            </div>
            <div class="input-field col s12">
                {{Form::label('note', 'Note')}}
                {{Form::text('note', $directors->note, array('class' => 'validate'))}}
            </div>
        </div>

        <div class="row">
            <div class="file-field input-field col s12">
                <div class="center">
                    <img class="circle" id="img" src="{{$directors->image}}" width="100" height="100" alt="uplode image">
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

        <div class="row">
            <div class="input-field col s12">
                {{Form::label('biography', 'Biography')}}
                {{Form::textarea('biography', $directors->biography,array('class' => 'materialize-textarea'))}}
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
