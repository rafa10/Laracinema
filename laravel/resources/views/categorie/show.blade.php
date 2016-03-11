@extends('layouts.master')

@section('title', 'catégorie')

@section('table')
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
                <td>{{$categorie->title}}</td>
                <td>{!! $categorie->description !!}</td>
                <td>{{$categorie->created_at}}</td>
                <td><img src="{{$categorie->image}}" width=220" height="300"></td>
                <td><a href="{{route('categorie_destroy', $categorie->id)}}"><i class="small material-icons">delete</i></a></td>
            </tr>
            </tbody>
    </table>
@endsection





