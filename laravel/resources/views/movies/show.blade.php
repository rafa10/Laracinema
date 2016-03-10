@extends('layouts.master')

@section('title', 'movies')

@section('table')

    <div class="row">
        <div class="col s12">
            <div class="card red lighten-4 ">
                <div class="card-content black-text center">
                    <span>Etez vous sur de supprimer ce film : {{$movies->id}}</span>
                </div>
            </div>
        </div>
    </div>

    <table>
        <thead>
        <tr>
            <th data-field="id">Type</th>
            <th data-field="id">Title</th>
            <th data-field="price">Description</th>
            <th data-field="price">langue</th>
            <th data-field="price">Image</th>
            <th data-field="price">delete</th>
        </tr>
        </thead>
            <tbody>
            <tr>
                <td>{{$movies->type}}</td>
                <td>{{$movies->title}}</td>
                <td>{!! $movies->description !!}</td>
                <td>{{$movies->languages}}</td>
                <td><img src="{{$movies->image}}" width=220" height="300"></td>
                <td><a href="{{route('movies_destroy', $movies->id)}}"><i class="small material-icons">delete</i></a></td>
            </tr>
            </tbody>
    </table>
@endsection
