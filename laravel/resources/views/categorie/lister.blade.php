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
        @foreach($categories as $item)
            <tbody>
            <tr>
                <td>{{$item->title}}</td>
                <td>{!! $item->description !!}</td>
                <td>{{$item->created_at}}</td>
                <td><img src="{{$item->image}}" width=220" height="300"></td>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection





