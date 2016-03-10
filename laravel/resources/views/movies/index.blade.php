@extends('layouts.master')

@section('title', 'movies')

@section('table')

    @if(Session::has('create'))
        <div class="row">
            <div class="col s12">
                <div class="card green lighten-4 ">
                    <div class="card-content black-text center">
                        <span>{{ Session::get('create') }}</span>
                    </div>
                </div>
            </div>
        </div>
    @elseif(Session::has('delete'))
        <div class="row">
            <div class="col s12">
                <div class="card green lighten-4 ">
                    <div class="card-content black-text center">
                        <span>{{ Session::get('delete') }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <table>
        <thead>
        <tr>
            <th data-field="id">Type</th>
            <th data-field="id">Title</th>
            <th data-field="price">Description</th>
            <th data-field="price">langue</th>
            <th data-field="price">Image</th>
            <th data-field="price">Crée</th>
            <th data-field="price">Edit</th>
            <th data-field="price">delete</th>
            <th data-field="price">Categorie</th>
        </tr>
        </thead>
        @foreach($movies as $item)
        <tbody>
        <tr>
            <td>{{$item->type}}</td>
            <td>{{$item->title}}</td>
            <td>{!! $item->description !!}</td>
            <td>{{$item->languages}}</td>
            <td><img src="{{$item->image}}" width=220" height="300"></td>
            <td><a href="{{route('movies_create')}}"><i class="small material-icons">add</i></a></td>
            <td><a href="{{route('movies_edit', $item->id)}}"><i class="small material-icons">mode_edit</i></a></td>
            <td><a href="{{route('movies_show', $item->id)}}"><i class="small material-icons">delete</i></a></td>
            <td><a href="{{route('categorie_display', $item->categories_id)}}"><i class="small material-icons">visibility</i></a></td>
        </tr>
        </tbody>
        @endforeach
    </table>
@endsection
