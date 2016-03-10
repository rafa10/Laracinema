@extends('layouts.master')

@section('title', 'directors')

@section('table')
    <table>
        <thead>
        <tr>
            <th data-field="id">firstname</th>
            <th data-field="id">Lastname</th>
            <th data-field="price">Dob</th>
            <th data-field="price">Note</th>
            <th data-field="price">Created at</th>
            <th data-field="price">Image</th>
            <th data-field="price">Voir</th>
        </tr>
        </thead>
        @foreach($directors as $item)
        <tbody>
        <tr>
            <td>{{$item->firstname}}</td>
            <td>{{$item->lastname}}</td>
            <td>{{$item->dob}}</td>
            <td>{{$item->note}}</td>
            <td>{{$item->created_at}}</td>
            <td><img src="{{$item->image}}" width="100" height="120"></td>
            <td><a href="{{url('directors/display',$item->id)}}">Display</a></td>
        </tr>
        </tbody>
        @endforeach
    </table>
@endsection


