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
        </tr>
        </thead>
            <tbody>
            <tr>
                <td>{{$categories->title}}</td>
                <td>{!! $categories->description !!}</td>
                <td>{{$categories->created_at}}</td>
                <td><img src="{{$categories->image}}" width=220" height="300"></td>
            </tr>
            </tbody>
    </table>
@endsection





