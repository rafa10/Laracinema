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

    <table>
        <thead>
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
            <td><img src="{{$directors->image}}" width="100" height="120"></td>
            <td><a href="{{route('directors_destroy', $directors->id)}}"><i class="small material-icons">delete</i></a></td>
        </tr>
        </tbody>
    </table>
@endsection

