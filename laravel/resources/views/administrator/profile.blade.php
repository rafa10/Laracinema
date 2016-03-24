@extends('layouts.master')

@section('title', 'movies')

@section('table')

    <div id="profile-page-header" class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('img/user-profile-bg.jpg')}}" height="200" alt="user background">
        </div>
        <figure class="card-profile-image">
            <img src="{{$admin->photo}}" width="100" height="100" alt="profile image" class="circle z-depth-2 responsive-img activator">
        </figure>
        <div class="card-content">
            <div class="row">
                <div class="col s3 offset-s2">
                    <h4 class="card-title grey-text text-darken-4">{{$admin->lastname}}&nbsp;{{$admin->firstname}}</h4>
                    <p class="medium-small grey-text">Administrator</p>
                </div>
                <div class="col s2 center-align">
                    <h4 class="card-title grey-text text-darken-4">10+</h4>
                    <p class="medium-small grey-text">Work Experience</p>
                </div>
                <div class="col s2 center-align">
                    <h4 class="card-title grey-text text-darken-4">6</h4>
                    <p class="medium-small grey-text">Completed Projects</p>
                </div>
                <div class="col s2 center-align">
                    <h4 class="card-title grey-text text-darken-4">$ 1,253,000</h4>
                    <p class="medium-small grey-text">Busness Profit</p>
                </div>
                <div class="col s1 right-align">
                    <a class="btn-floating activator waves-effect waves-light darken-2 right">
                        <i class="mdi-action-perm-identity"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-reveal">
            <p>
                <span class="card-title grey-text text-darken-4">{{$admin->lastname}}&nbsp;{{$admin->firstname}} <i class="mdi-navigation-close right"></i></span>
                <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Administrator</span>
            </p>

            <p>{{$admin->description}}</p>

            <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
            <p><i class="mdi-communication-email cyan-text text-darken-2"></i> {{$admin->email}}</p>
            <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
            <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
        </div>
    </div>

@endsection
