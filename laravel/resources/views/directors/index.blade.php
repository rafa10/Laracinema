@extends('layouts.master')

@section('title', 'directors')

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

    <table class="bordered white z-depth-1">
        <thead class="purple lighten-4">
        <tr>
            <th data-field="price">Image</th>
            <th data-field="id">firstname</th>
            <th data-field="id">Lastname</th>
            <th data-field="price">Dob</th>
            <th data-field="price">Note</th>

            <th data-field="action" colspan="3">Action</th>
        </tr>
        </thead>
        @foreach($directors as $item)
        <tbody>
        <tr>
            <td><img src="{{$item->image}}" width="100" height="120"></td>
            <td>{{$item->firstname}}</td>
            <td>{{$item->lastname}}</td>
            <td>{{ $item->dob->diffInYears(\Carbon\Carbon::now()) }}</td>
            <td>{{$item->note}}</td>

            <td>
                <a class="btn-floating btn-large waves-effect waves-light green" href="{{route('directors_create')}}"><i class="small material-icons ">add</i></a>
                <a class="btn-floating btn-large waves-effect waves-light blue" href="{{route('directors_edit', $item->id)}}"><i class="small material-icons ">mode_edit</i></a>
                <a class="btn-floating btn-large waves-effect waves-light red" href="{{route('directors_show', $item->id)}}"><i class="small material-icons">delete</i></a>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
@endsection


