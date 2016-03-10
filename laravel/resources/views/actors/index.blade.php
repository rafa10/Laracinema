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
            <th data-field="id">Name</th>
            <th data-field="id">Dob</th>
            <th data-field="price">city</th>
            <th data-field="price">Rols</th>
            <th data-field="price">Image</th>
            <th data-field="price">Created_at</th>
            <th data-field="price">Updated_at</th>
            <th data-field="price">Crée</th>
            <th data-field="price">Edit</th>
            <th data-field="price">Delete</th>
        </tr>
        </thead>
        @foreach($actors as $item)
            <tbody>
            <tr>
                <td>{{$item->firstname}}&nbsp;{{$item->lastname}}</td>
                <td>{{$item->dob}}</td>
                <td>{{$item->city}}</td>
                <td>{!! $item->roles !!}</td>
                <td><img src="{{$item->image}}" width=100" height="100"></td>
                <td>{{$item->created_at->format('Y-m-d')}}</td>
                <td>{{$item->updated_at->format('Y-m-d')}}</td>
                <td><a href="{{route('actors_create')}}"><i class="small material-icons">add</i></a></td>
                <td><a href="{{route('actors_edit',$item->id)}}"><i class="small material-icons">mode_edit</i></a></td>
                <td><a href="{{route('actors_show',$item->id)}}"><i class="small material-icons">delete</i></a></td>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection
