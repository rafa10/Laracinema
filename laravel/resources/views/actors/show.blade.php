@extends('layouts.master')

@section('title', 'movies')


@section('table')

    <div class="row">
        <div class="col s12">
            <div class="card red lighten-4 ">
                <div class="card-content black-text center">
                    <i class="material-icons">error_outline</i><br>
                    <span>Etez vous sur de supprimer ce directors N°: {{$actors->firstname}}&nbsp;{{$actors->lastname}}</span>
                </div>
            </div>
        </div>
    </div>

    <table class="bordered responsive-table white z-depth-1">
        <thead class="teal lighten-3">
        <tr>
            <th data-field="id">Name</th>
            <th data-field="id">Dob</th>
            <th data-field="price">city</th>
            <th data-field="price">Rols</th>
            <th data-field="price">Image</th>
            <th data-field="price">Delete</th>
        </tr>
        </thead>
            <tbody>
            <tr>
                <td>{{$actors->firstname}}&nbsp;{{$actors->lastname}}</td>
                <td>{{$actors->dob}}</td>
                <td>{{$actors->city}}</td>
                <td>{!! $actors->roles !!}</td>
                <td><img src="{{$actors->image}}" width=100" height="100"></td>
                <td><a class="btn-floating btn-large waves-effect waves-light red" href="{{route('actors_destroy', $actors->id)}}"><i class="small material-icons">delete</i></a></td>
            </tr>
            </tbody>
    </table><br><br><br><br><br><br><br><br><br><br><br>
@endsection
