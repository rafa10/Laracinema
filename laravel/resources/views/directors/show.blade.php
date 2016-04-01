@extends('layouts.master')

@section('title', 'directors')

@section('table')

    <div class="row">
        <div class="col s12">
            <div class="card red lighten-4 ">
                <div class="card-content black-text center">
                    <i class="material-icons">error_outline</i><br>
                    <span>Etez vous sur de supprimer ce directors N°: {{$directors->id}}</span>
                </div>
            </div>
        </div>
    </div>

    <table class="centered responsive-table white z-depth-1">
        <thead class="teal lighten-3">
        <tr>
            <th data-field="id">firstname</th>
            <th data-field="id">Lastname</th>
            <th data-field="price">Dob</th>
            <th data-field="price">Note</th>
            <th data-field="price">Image</th>
            <th data-field="price">Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$directors->firstname}}</td>
            <td>{{$directors->lastname}}</td>
            <td>{{$directors->dob}}</td>
            <td>{{$directors->note}}</td>
            <td><img class="circle" src="{{$directors->image}}" width="80" height="80"></td>
            <td><a class="btn-floating btn-large waves-effect waves-light red" href="{{route('directors_destroy', $directors->id)}}"><i class="small material-icons">delete</i></a></td>
        </tr>
        </tbody>
    </table>
@endsection

