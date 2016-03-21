@extends('layouts.master')

@section('title', 'show-categories')

@section('table')

    <div class="row">
        <div class="col s12">
            <div class="card red lighten-4 ">
                <div class="card-content black-text center">
                    <i class="material-icons">error_outline</i><br>
                    <span>Etez vous sur de supprimer ce directors N°: {{$categories->title}}</span>
                </div>
            </div>
        </div>
    </div>

    <table class="centered responsive-table white z-depth-1">
        <thead class="teal lighten-3">
        <tr>
            <th data-field="id">Titre</th>
            <th data-field="price">Description</th>
            <th data-field="price">Date de creation</th>
            <th data-field="price">Image</th>
            <th data-field="price">delete</th>
        </tr>
        </thead>
            <tbody>
            <tr>
                <td>{{$categories->title}}</td>
                <td>{!! $categories->description !!}</td>
                <td>{{$categories->created_at}}</td>
                <td><img src="{{$categories->image}}" width=220" height="300"></td>
                <td><a class="btn-floating btn-large waves-effect waves-light red" href="{{route('categories_destroy', $categories->id)}}"><i class="small material-icons">delete</i></a></td>
            </tr>
            </tbody>
    </table>
@endsection





