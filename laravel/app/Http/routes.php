<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//
Route::group(['middleware' => ['web']], function () {


    Route::get('/', function () {
        return view('welcome');
    });

/*===============================================*/
/*=========== routing de page movies ============*/
/*===============================================*/
    Route::group(['prefix' => '/movies'], function(){

        Route::get('/index', [
            'as' => 'movies_index',
            'uses' => 'MoviesController@index'
        ]);

        Route::get('/create', [
            'as' => 'movies_create',
            'uses' => 'MoviesController@create'
        ]);

        Route::post('/store', [
            'as' => 'movies_store',
            'uses' => 'MoviesController@store'
        ]);

        Route::get('/show/{id}', [
            'as' => 'movies_show',
            'uses' => 'MoviesController@show'
        ])->where('id', '[0-9]+');

        Route::get('/edit/{id}', [
            'as' => 'movies_edit',
            'uses' => 'MoviesController@edit'
        ])->where('id', '[0-9]+');

        Route::post('/update/{id}', [
            'as' => 'movies_update',
            'uses' => 'MoviesController@update'
        ])->where('id', '[0-9]+');

        Route::get('/destroy/{id}', [
            'as' => 'movies_destroy',
            'uses' => 'MoviesController@destroy'
        ])->where('id', '[0-9]+');

    });
/*===============================================*/
/*========== routing de page categorie===========*/
/*===============================================*/
Route::group(['prefix' => '/categorie'], function(){

    Route::get('/index', [
        'as' => 'categorie_index',
        'uses' => 'CategorieController@index'
    ]);

    Route::get('/create', [
        'as' => 'categorie_create',
        'uses' => 'CategorieController@create'
    ]);

    Route::post('/store', [
        'as' => 'categorie_store',
        'uses' => 'CategorieController@store'
    ]);

    Route::get('/show/{id}', [
        'as' => 'categorie_show',
        'uses' => 'CategorieController@show'
    ])->where('id', '[0-9]+');

    Route::get('/edit/{id}', [
        'as' => 'categorie_edit',
        'uses' => 'CategorieController@edit'
    ])->where('id', '[0-9]+');

    Route::post('/update/{id}', [
        'as' => 'categorie_update',
        'uses' => 'CategorieController@update'
    ])->where('id', '[0-9]+');

    Route::get('/destroy/{id}', [
        'as' => 'categorie_destroy',
        'uses' => 'CategorieController@destroy'
    ])->where('id', '[0-9]+');

});
/*===============================================*/
/*=========== routing de page directors==========*/
/*===============================================*/
Route::group(['prefix' => '/directors'], function(){

    Route::get('/lister', [
        'as' => 'directors_lister',
        'uses' => 'DirectorsController@lister'
    ]);

    Route::get('/display/{id}', [
        'as' => 'directors_display',
        'uses' => 'DirectorsController@display'
    ])->where('id', '[0-9]+');

    Route::get('/create', [
        'as' => 'directors_create',
        'uses' => 'DirectorsController@create'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'directors_edit',
        'uses' => 'DirectorsController@edit'
    ])->where('id', '[0-9]+');

});
/*===============================================*/
/*=========== routing de page Actors==========*/
/*===============================================*/
Route::group(['prefix' => '/actors'], function(){

    Route::get('/index', [
        'as' => 'actors_index',
        'uses' => 'ActorsController@index'
    ]);

    Route::get('/create', [
        'as' => 'actors_create',
        'uses' => 'ActorsController@create'
    ]);

    Route::post('/store', [
        'as' => 'actors_store',
        'uses' => 'ActorsController@store'
    ]);

    Route::get('/show/{id}', [
        'as' => 'actors_show',
        'uses' => 'ActorsController@show'
    ])->where('id', '[0-9]+');

    Route::get('/edit/{id}', [
        'as' => 'actors_edit',
        'uses' => 'ActorsController@edit'
    ])->where('id', '[0-9]+');

    Route::post('/update/{id}', [
        'as' => 'actors_update',
        'uses' => 'ActorsController@update'
    ])->where('id', '[0-9]+');

    Route::get('/destroy/{id}', [
        'as' => 'actors_destroy',
        'uses' => 'ActorsController@destroy'
    ])->where('id', '[0-9]+');

});




});
