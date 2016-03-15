@extends('layouts.master')

@section('title', 'movies')

@section('table')

    @if(Session::has('create'))
        <div class="row">
            <div class="col s12">
                <div id="card-alert" class="card green lighten-5">
                    <div class="card-content green-text center">
                        <p><i class="material-icons">error_outline</i> {{Session::get('create')}}</p>
                    </div>
                </div>
            </div>
        </div>
    @elseif(Session::has('delete'))
        <div class="row">
            <div class="col s12">
                <div id="card-alert" class="card green lighten-5">
                    <div class="card-content green-text center">
                        <p><i class="material-icons">error_outline</i> {{Session::get('delete')}}</p>
                    </div>
                </div>
            </div>
        </div>
    @elseif(Session::has('visible'))
        <div class="row">
            <div class="col s12">
                <div id="card-alert" class="card green lighten-5">
                    <div class="card-content green-text center">
                        <p><i class="material-icons">error_outline</i>{{Session::get('visible')}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <table class="bordered responsive-table white z-depth-1">
        <thead class="teal lighten-3">
        <tr>
            <th data-field="Image">Image</th>
            <th data-field="Type">Type</th>
            <th data-field="Title">Title</th>
            <th data-field="Title">Categories</th>
            <th data-field="Description">Description</th>
            <th data-field="langue">Langue</th>
            <th data-field="visible">Visible</th>
            <th data-field="visible">Cover</th>
            <th data-field="date">Date</th>
            <th data-field="action" colspan="3">Action</th>
        </tr>
        </thead>
        @foreach($movies as $item)
        <tbody>
        <tr>
            <td><img src="{{$item->image}}" width=100" height="150"></td>
            <td>{{$item->type}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->categories->title}}</td>
            <td>{!! \Illuminate\Support\Str::limit($item->description, 150) !!}</td>
            <td>{{$item->languages}}</td>
            <td>
            @if($item->visible == true)
                <a class="btn-floating btn-large waves-effect waves-light blue" href="{{route('movies_invisible', $item->id)}}"><i class="small material-icons ">visibility</i></a>
            @else
                <a class="btn-floating btn-large waves-effect waves-light red" href="{{route('movies_visible', $item->id)}}"><i class="small material-icons ">visibility_off</i></a>
            @endif
            </td>
            <td>
            @if($item->cover == true)
                <a class="btn-floating btn-large waves-effect waves-light blue" href="{{route('movies_incover', $item->id)}}"><i class="small material-icons">stars</i></a>
            @else
                <a class="btn-floating btn-large waves-effect waves-light red" href="{{route('movies_cover', $item->id)}}"><i class="small material-icons ">stars</i></a>
            @endif
            </td>
            <td>{{$item->date_release}}</td>

            <td>
                <a class="btn-floating btn-large waves-effect waves-light green" href="{{route('movies_create')}}"><i class="small material-icons ">add</i></a>
                <a class="btn-floating btn-large waves-effect waves-light blue" href="{{route('movies_edit', $item->id)}}"><i class="small material-icons ">mode_edit</i></a>
                <a class="btn-floating btn-large waves-effect waves-light red" href="{{route('movies_show', $item->id)}}"><i class="small material-icons">delete</i></a>
            </td>

        </tr>
        </tbody>
        @endforeach
    </table>

    <div class="row">
        <div class="col s12 center">
                {!! $movies->render() !!}
        </div>
    </div>

@endsection
