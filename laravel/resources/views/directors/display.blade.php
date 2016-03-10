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
        </tr>
        </thead>
        @if($directors)
        <tbody>
        <tr>
            <td>{{$directors->firstname}}</td>
            <td>{{$directors->lastname}}</td>
            <td>{{$directors->dob}}</td>
            <td>{{$directors->note}}</td>
            <td>{{$directors->created_at}}</td>
            <td><img src="{{$directors->image}}" width="100" height="120"></td>
        </tr>
        </tbody>
        @else
        <tbody>
        <tr>
            <td class="center-align" colspan="7"> Ce identifiant ne correspant pas  a un directors</td>
        </tr>
        </tbody>
        @endif
    </table>
@endsection

