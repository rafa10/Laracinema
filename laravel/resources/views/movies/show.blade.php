@extends('layouts.master')

@section('title', 'movies')

@section('table')

    <div class="row">
        <div class="col s12">
            <div id="card-alert" class="card red lighten-5">
                <div class="card-content red-text center">
                    <p><i class="material-icons">error_outline</i> Etez vous sur de supprimer ce film: {{$movies->title}}</p>
                </div>
            </div>
        </div>
    </div>

    <table class="bordered responsive-table white z-depth-1">
        <thead class="teal lighten-3">
        <tr>
            <th data-field="Image">Image</th>
            <th data-field="Type">Type</th>
            <th data-field="Title">Title</th>
            <th data-field="Description">Description</th>
            <th data-field="langue">Langue</th>
            <th data-field="date">Date</th>
            <th data-field="action" colspan="3">Action</th>
        </tr>
        </thead>
            <tbody>
            <tr>
                <td><img src="{{$movies->image}}" width=100" height="150"></td>
                <td>{{$movies->type}}</td>
                <td>{{$movies->title}}</td>
                <td>{!! \Illuminate\Support\Str::limit($movies->description, 150) !!}</td>
                <td>{{$movies->languages}}</td>
                <td>{{$movies->date_release}}</td>
                <td><a class="btn-floating btn-large waves-effect waves-light red" href="{{route('movies_destroy', $movies->id)}}"><i class="small material-icons">delete</i></a></td>
            </tr>
            </tbody>
    </table>
@endsection
