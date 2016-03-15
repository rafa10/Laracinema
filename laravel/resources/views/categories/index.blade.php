@extends('layouts.master')

@section('title', 'index-categories')

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

    <table class="bordered  white z-depth-1">
        <thead class="purple lighten-4">
        <tr>
            <th data-field="price">Image</th>
            <th data-field="id">Titre</th>
            <th data-field="price">Description</th>
            <th data-field="price">Slug</th>

            <th data-field="action" colspan="3">Action</th>
        </tr>
        </thead>
        @foreach($categories as $item)
            <tbody>
            <tr>
                <td><img src="{{$item->image}}" width=120" height="170"></td>
                <td>{{$item->title}}</td>
                <td>{!! $item->description !!}</td>
                <td>{{$item->slug}}</td>

                <td>
                    <a class="btn-floating btn-large waves-effect waves-light green" href="{{route('categories_create')}}"><i class="small material-icons ">add</i></a>
                    <a class="btn-floating btn-large waves-effect waves-light blue" href="{{route('categories_edit', $item->id)}}"><i class="small material-icons ">mode_edit</i></a>
                    <a class="btn-floating btn-large waves-effect waves-light red" href="{{route('categories_show', $item->id)}}"><i class="small material-icons">delete</i></a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection





