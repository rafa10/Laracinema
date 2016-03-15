@extends('layouts.master')

@section('title', 'home')

@section('table')

            {{--<div class="row valign-wrapper">

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
            --}}

            {{--<div class="row">
                <h3 class="center">Movies</h3>

                @foreach($movies as $item)
                    @if($item->visible == true)
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
                    @endif
                @endforeach
            </div>--}}

            <div class="row">{{-- row content--}}
                <div class="col s12 m6 l3">{{-- stats movies--}}
                    <div class="card center">
                        <div class="card-content green lighten-1 white-text">
                            <p class="card-stats-title"><i class="medium material-icons">movie</i></p>
                            <h4 class="card-stats-number">{{$nbMovies}} /{{count($totalMovies)}}</h4>
                            <p class="card-stats-compare"><span class="deep-purple-text text-lighten-5">Nb Movies actifs</span>
                            </p>
                        </div>
                        {{--<div class="card-action  green darken-2">
                            <div id="invoice-line" class="center-align"><canvas width="187" height="25" style="display: inline-block; width: 187px; height: 25px; vertical-align: top;"></canvas></div>
                        </div>--}}
                    </div>
                </div>

                <div class="col s12 m6 l3">{{-- stats comments --}}
                    <div class="card center">
                        <div class="card-content pink lighten-1 white-text">
                            <p class="card-stats-title"><i class="medium material-icons">comment</i></p>
                            <h4 class="card-stats-number">{{$nbComments}}/{{ count($totalComments) }}</h4>
                            <p class="card-stats-compare"><span class="deep-purple-text text-lighten-5">Nb Comments</span>
                            </p>
                        </div>
                        {{--<div class="card-action  pink darken-2">
                            <div id="invoice-line" class="center-align"><canvas width="187" height="25" style="display: inline-block; width: 187px; height: 25px; vertical-align: top;"></canvas></div>
                        </div>--}}
                    </div>
                </div>

                <div class="col s12 m6 l3">{{-- stats sence --}}
                    <div class="card center">
                        <div class="card-content cyan lighten-1 white-text">
                            <p class="card-stats-title"><i class="medium material-icons">visibility</i></p>
                            <h4 class="card-stats-number">{{$nbSessions}} </h4>
                            <p class="card-stats-compare"><span class="deep-purple-text text-lighten-5">Nb Sence has come</span>
                            </p>
                        </div>
                        {{--<div class="card-action  cyan darken-2">
                            <div id="invoice-line" class="center-align"><canvas width="187" height="25" style="display: inline-block; width: 187px; height: 25px; vertical-align: top;"></canvas></div>
                        </div>--}}
                    </div>
                </div>

                <div class="col s12 m6 l3">{{-- stats user --}}
                    <div class="card center">
                        <div class="card-content purple white-text">
                            <p class="card-stats-title"><i class="medium material-icons">verified_user</i></p>
                            <h4 class="card-stats-number">{{$nbUser}}/{{count($totalUser)}}</h4>
                            <p class="card-stats-compare"><span class="deep-purple-text text-lighten-5">Nb user enable</span>
                            </p>
                        </div>
                        {{--<div class="card-action purple darken-2">
                            <div id="invoice-line" class="center-align"><canvas width="187" height="25" style="display: inline-block; width: 187px; height: 25px; vertical-align: top;"></canvas></div>
                        </div>--}}
                    </div>
                </div>

                <div class="col s12 m6 l3">{{-- stats age user --}}
                    <div class="card center">
                        <div class="card-content purple white-text">
                            <p class="card-stats-title"><i class="medium material-icons">verified_user</i></p>
                            <h4 class="card-stats-number">{{$nbUser}} ans</h4>
                            <p class="card-stats-compare"><span class="deep-purple-text text-lighten-5">Mayenne d'age d'actors</span>
                            </p>
                        </div>
                        {{--<div class="card-action purple darken-2">
                            <div id="invoice-line" class="center-align"><canvas width="187" height="25" style="display: inline-block; width: 187px; height: 25px; vertical-align: top;"></canvas></div>
                        </div>--}}
                    </div>
                </div>

                <div class="col s12 m6 l3">{{-- stats --}}
                    <div class="card center">
                        <div class="card-content pink lighten-1 white-text">
                            <p class="card-stats-title"><i class="medium material-icons">comment</i></p>
                            <h4 class="card-stats-number">{{$nbComments}}/{{ count($totalComments) }}</h4>
                            <p class="card-stats-compare"><span class="deep-purple-text text-lighten-5">Budget total</span>
                            </p>
                        </div>
                        {{--<div class="card-action  pink darken-2">
                            <div id="invoice-line" class="center-align"><canvas width="187" height="25" style="display: inline-block; width: 187px; height: 25px; vertical-align: top;"></canvas></div>
                        </div>--}}
                    </div>
                </div>


            </div>



@endsection
