@extends('layouts.home')

@section('title', 'home')

@section('table')
    <div class="row valign-wrapper">

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image yellow darken-2">
                    <img src="{{asset('img/tool.png')}}">
                </div>
                <div class="card-action">
                    <a href="{{route('movies_index')}}" class="black-text">Movies: {{count($movies)}}</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image yellow darken-2">
                    <img src="{{asset('img/squares.png')}}">
                </div>
                <div class="card-action">
                    <a href="{{route('categories_index')}}" class="black-text">Catégorie: {{count($categories)}}</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image yellow darken-2">
                    <img src="{{asset('img/people.png')}}">
                </div>
                <div class="card-action">
                    <a href="{{route('actors_index')}}" class="black-text">Actors: {{count($actors)}}</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image yellow darken-2">
                    <img src="{{asset('img/music.png')}}">
                </div>
                <div class="card-action">
                    <a href="{{route('directors_index')}}" class="black-text">Directors: {{count($directors)}}</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <h3 class="center">Movies</h3>
        @foreach($movies as $item)
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image yellow darken-2">
                        <img src="{{$item->image}}" width="100" height="250">
                    </div>
                    <div class="card-action">
                        <a href="#" class="pink-text lighten-2-text">Showcase</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
