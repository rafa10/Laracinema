@extends('layouts.master')

@section('title', 'movies')

@section('table')

    @if(Session::has('create'))
        <div class="row">
            <div class="col s12">
                <div class="card green lighten-4 ">
                    <div class="card-content black-text center">
                        <i class="material-icons">info_outline</i><br>
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
                        <i class="material-icons">info_outline</i><br>
                        <span>{{ Session::get('delete') }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <h5 class="center">List actors ({{count($actors)}})</h5>

    <table class="centered bordered white z-depth-1">
        <thead class="grey lighten-4">
        <tr>
            <th data-field="price">Image</th>
            <th data-field="id">Name</th>
            <th data-field="id">Age</th>
            <th data-field="price">city</th>
            <th data-field="price">Rols</th>
            <th data-field="price">Updated_at</th>
            <th data-field="action" colspan="3">Action</th>
        </tr>
        </thead>
        @foreach($actors as $item)
            <tbody>
            <tr>
                <td><img src="{{$item->image}}" width=100" height="100"></td>
                <td>{{$item->firstname}}&nbsp;{{$item->lastname}}</td>
                <td>{{ $item->dob->diffInYears(\Carbon\Carbon::now()) }}</td>
                <td>{{$item->city}}</td>
                <td>{!! $item->roles !!}</td>
                <td>{{$item->updated_at->format('Y-m-d')}}</td>

                <td>
                    <a class="btn-floating btn-large waves-effect waves-light green" href="{{route('actors_create')}}"><i class="small material-icons ">add</i></a>
                    <a class="btn-floating btn-large waves-effect waves-light blue" href="{{route('actors_edit', $item->id)}}"><i class="small material-icons ">mode_edit</i></a>
                    <a class="btn-floating btn-large waves-effect waves-light red" href="{{route('actors_show', $item->id)}}"><i class="small material-icons">delete</i></a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection
