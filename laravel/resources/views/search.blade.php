@extends('layouts.master')

@section('title', 'home')

@section('table')




    <div class="row">{{-- row content search--}}

        <div class="col s12">
            <ul class="collection white z-depth-1">
                <li class="collection-item avatar grey lighten-3">
                    <i class="material-icons circle grey">search</i><br>
                    <span class="title">La résultat "{{$query}}" : {{count($querySearch)}} touvés </span>
                </li>
                @if(count($querySearch) === 0)
                    <br>
                    <li class="center"> Aucun résultat de recherche trouvé</li>
                    <br>
                @elseif(count($querySearch) >= 1)
                    @foreach($querySearch as $item)
                        <li>
                            <div class="row white">
                                <div class="col s2 center"><br>
                                    <img src="{{$item->mImage}}" width="80" height="120" alt="img_movies">
                                </div>
                                <div class="col s9"><br>
                                    <span class="title"><b>{{$item->mTitle}}</b></span>
                                    <p><span class="grey-text">{!! str_limit($item->mDescription, 150) !!}</span></p>
                                    <p><span class="grey-text">{{ strip_tags($item->mSynopsis) }}</span></p>
                                    <p>
                                        <ul>
                                            <li>Categories: {{$item->cTitle}}</li>
                                            <li>Type: {{$item->mType}}</li>
                                            <li>Budget: {{$item->mBudget}} €</li>
                                            <li>Année: {{$item->mAnnee}}</li>
                                            <li>Languages: {{$item->mlang}}</li>
                                        </ul>
                                    </p>
                                    <span><b>Actors</b></span>
                                    <p>
                                        <img class="circle" src="{{$item->aImage}}" width="80" height="80" alt="img_actors"><br>
                                        <span>{{$item->aFirstname}}&nbsp;{{$item->aLastname}}</span>
                                    </p>
                                    <span><b>Directors</b></span>
                                    <p>
                                        <img class="circle" src="{{$item->dImage}}" width="80" height="80" alt="img_actors"><br>
                                        <span>{{$item->dFirstname}}&nbsp;{{$item->dLastname}}</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="row">
            <div class="col s12 center">
                {!! $querySearch->links() !!}
            </div>
        </div>

    </div>



@endsection
