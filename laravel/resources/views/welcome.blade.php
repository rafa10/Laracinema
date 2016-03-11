@extends('layouts.master')

@section('title', 'home')

@section('table')
    <br><br><br><br><br><br>
    <div class="row valign-wrapper">

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('img/tool.png')}}">
                </div>
                <div class="card-action">
                    <a href="{{route('movies_index')}}">Movies</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('img/squares.png')}}">
                </div>
                <div class="card-action">
                    <a href="{{route('categorie_index')}}">Catégorie</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('img/people.png')}}">
                </div>
                <div class="card-action">
                    <a href="{{route('actors_index')}}">Actors</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('img/music.png')}}">
                </div>
                <div class="card-action">
                    <a href="{{route('directors_lister')}}">Directors</a>
                </div>
            </div>
        </div>

    </div>
    <br><br><br><br><br><br>
@endsection
