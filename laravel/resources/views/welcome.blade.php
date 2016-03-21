@extends('layouts.master')

@section('title', 'home')

@section('table')



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
                            <p class="card-stats-title"><i class="medium material-icons">supervisor_account</i></p>
                            <h4 class="card-stats-number">{{$moyAge}} ans</h4>
                            <p class="card-stats-compare"><span class="deep-purple-text text-lighten-5">Mayenne d'age d'actors</span>
                            </p>
                        </div>
                        {{--<div class="card-action purple darken-2">
                            <div id="invoice-line" class="center-align"><canvas width="187" height="25" style="display: inline-block; width: 187px; height: 25px; vertical-align: top;"></canvas></div>
                        </div>--}}
                    </div>
                </div>

                <div class="col s12 m6 l3">{{-- stats moyene d'age --}}
                    <div class="card center">
                        <div class="card-content green lighten-1 white-text">
                            <p class="card-stats-title"><i class="medium material-icons">shopping_cart</i></p>
                            <h4 class="card-stats-number">{{$totalBudget}}</h4>
                            <p class="card-stats-compare"><span class="deep-purple-text text-lighten-5">Budget total</span>
                            </p>
                        </div>
                        {{--<div class="card-action  green darken-2">
                            <div id="invoice-line" class="center-align"><canvas width="187" height="25" style="display: inline-block; width: 187px; height: 25px; vertical-align: top;"></canvas></div>
                        </div>--}}
                    </div>
                </div>

                <div class="col s12 m6 l3">{{-- stats moyene d'age --}}
                    <div class="card center">
                        <div class="card-content pink lighten-1 white-text">
                            <p class="card-stats-title"><i class="medium material-icons">today</i></p>
                            <h4 class="card-stats-number">{{$moyDuree}}h</h4>
                            <p class="card-stats-compare"><span class="deep-purple-text text-lighten-5">Moyenne durée movies</span>
                            </p>
                        </div>
                        {{--<div class="card-action  pink darken-2">
                            <div id="invoice-line" class="center-align"><canvas width="187" height="25" style="display: inline-block; width: 187px; height: 25px; vertical-align: top;"></canvas></div>
                        </div>--}}
                    </div>
                </div>


                <div class="col s12 m6 l3">{{-- stats moyene d'age --}}
                    <div class="card center">
                        <div class="card-content cyan lighten-1 white-text">
                            <p class="card-stats-title"><i class="medium material-icons">class</i></p>
                            <h4 class="card-stats-number">{{$moyNote}}/{{count($totalMovies)}}</h4>
                            <p class="card-stats-compare"><span class="deep-purple-text text-lighten-5">Moyenne de note</span>
                            </p>
                        </div>
                        {{--<div class="card-action  cyan darken-2">
                            <div id="invoice-line" class="center-align"><canvas width="187" height="25" style="display: inline-block; width: 187px; height: 25px; vertical-align: top;"></canvas></div>
                        </div>--}}
                    </div>
                </div>

                <div class="col s6">{{-- 10 dernier user --}}
                    <ul class="collection z-depth-1">
                        <li class="collection-item avatar grey lighten-3">
                            <i class="material-icons circle red">supervisor_account</i><br>
                            <span class="title upper">16 dernier utlisateurs</span>
                        </li>
                        @foreach($userActif as $item)
                        <li class="collection-item avatar">
                            <img src="{{$item->avatar}}" alt="" class="circle">
                            <span class="title"><b>{{$item->username}}</b></span>
                            <p>{{$item->email}}</p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        @endforeach

                    </ul>
                </div>

                <div class="col s6">{{-- stats movies--}}
                    <ul class="collection z-depth-1">
                        <li class="collection-item avatar grey lighten-3">
                            <i class="material-icons circle pink">movie</i><br>
                            <span class="title upper">10 prochaines sessions</span>
                        </li>
                        @foreach($nextSessions as $item)
                        <li class="collection-item avatar">
                            <img src="{{asset('img/movie.png')}}" alt="" class="circle">
                            <span class="title"><b>{{$item->movies->title}}</b></span>
                            <p><span class="blue-text">{{$item->cinema->title}}</span><br><span class="grey-text">{{$item->date_session}}</span></p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        @endforeach
                    </ul>

                    <ul class="collection z-depth-1">{{-- stats laracinema--}}
                        <li class="collection-item avatar grey lighten-3">
                            <i class="material-icons circle cyan">trending_down</i><br>
                            <span class="title upper">Nombres</span>
                        </li>
                        <li class="collection-item"><div>Movies<a class="secondary-content white-text red circle"><b>&nbsp;{{count($totalMovies)}}&nbsp;</b></a></div></li>
                        <li class="collection-item"><div>Catégories<a class="secondary-content white-text blue circle"><b>&nbsp;{{count($totalCategories)}}&nbsp;</b></a></div></li>
                        <li class="collection-item"><div>Actors<a class="secondary-content white-text green circle"><b>&nbsp;{{count($totalActors)}}&nbsp;</b></a></div></li>
                        <li class="collection-item"><div>Directors<a class="secondary-content white-text purple circle"><b>&nbsp;{{count($totalDirectors)}}&nbsp;</b></a></div></li>
                        <li class="collection-item"><div>Sénces<a class="secondary-content white-text orange circle"><b>&nbsp;{{count($totalSessions)}}&nbsp;</b></a></div></li>
                        <li class="collection-item"><div>Média<a class="secondary-content white-text cyan circle"><b>&nbsp;{{count($totalMedias)}}&nbsp;</b></a></div></li>
                    </ul>
                </div>

                <div class="col s6">
                    <ul class="collection z-depth-1">{{-- stats movies--}}
                        <li class="collection-item avatar">
                            <i class="material-icons circle green">theaters</i><br>
                            <span class="title upper"><b>{{ $randTrailer->title }}</b></span>
                        </li>
                        <div class="video-container">
                            {!! $randTrailer->trailer !!}}}
                        </div>
                    </ul>
                </div>

                <div class="col s6">
                    <ul class="collection z-depth-1">{{-- stats budget by distribiteur--}}
                        <li class="collection-item avatar grey lighten-3">
                            <i class="material-icons circle purple">trending_down</i><br>
                            <span class="title upper"><b>Budget by Distributor</b></span>
                        </li>
                        @foreach($sumBudget as $item)
                        <li class="collection-item"><div>{{$item->distributeur}}<a class="secondary-content purple-text  "><b>{{$item->totalBudget}} €</b></a></div></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col s12">
                    <ul class="collection z-depth-1">
                        <li class="collection-item avatar grey lighten-3">
                            <i class="material-icons circle grey">comment</i><br>
                            <span class="title upper"><b>5 last comments</b></span>
                        </li>
                        @foreach($lastFiveComments as $item)
                            <li class="collection-item avatar">
                                @if($item->state == 2)
                                    <i class="material-icons circle green">done</i>
                                @elseif($item->state == 1)
                                    <i class="material-icons circle amber">replay</i>
                                @else
                                    <i class="material-icons circle red">clear</i>
                                @endif
                                <span class="title"><b>{{$item->user->username}}</b></span><span class="grey-text"> à commenter</span>
                                <p><span class="blue-text">{{$item->movies->title}}</span></p>
                                <a href="#!" class="secondary-content"><span class="grey-text">{{$item->created_at->format('d/m/Y')}} à {{$item->created_at->format('H:m')}}</span></a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>



@endsection
