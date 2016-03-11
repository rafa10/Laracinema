@extends('layouts.master')

@section('title', 'show-categories')

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
                <td><a href="{{route('categories_destroy', $categories->id)}}"><i class="small material-icons">delete</i></a></td>
            </tr>
            </tbody>
    </table>
@endsection





