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

/*===============================================*/
/*=========== routing de page home ============*/
/*===============================================*/

    Route::get('/', [
        'as'   => 'home',
        'uses' => 'HomeController@index'
    ]);

/*===============================================*/
/*=========== routing de page movies ============*/
/*===============================================*/

    Route::group(['prefix' => '/movies'], function(){

        Route::get('/index', [
            'as'   => 'movies_index',
            'uses' => 'MoviesController@index'
        ]);

        Route::get('/create', [
            'as'   => 'movies_create',
            'uses' => 'MoviesController@create'
        ]);

        Route::post('/store', [
            'as'   => 'movies_store',
            'uses' => 'MoviesController@store'
        ]);

        Route::get('/show/{id}', [
            'as'   => 'movies_show',
            'uses' => 'MoviesController@show'
        ])->where('id', '[0-9]+');

        Route::get('/edit/{id}', [
            'as'   => 'movies_edit',
            'uses' => 'MoviesController@edit'
        ])->where('id', '[0-9]+');

        Route::post('/update/{id}', [
            'as'   => 'movies_update',
            'uses' => 'MoviesController@update'
        ])->where('id', '[0-9]+');

        Route::get('/destroy/{id}', [
            'as'   => 'movies_destroy',
            'uses' => 'MoviesController@destroy'
        ])->where('id', '[0-9]+');

        route::get('/visible/{id}', [
            'as'   => 'movies_visible',
            'uses' => 'MoviesController@visible'
        ])->where('id', '[0-9]+');

        route::get('/invisible/{id}', [
            'as'   => 'movies_invisible',
            'uses' => 'MoviesController@invisible'
        ])->where('id', '[0-9]+');

        route::get('/cover/{id}', [
            'as'   => 'movies_cover',
            'uses' => 'MoviesController@cover'
        ])->where('id', '[0-9]+');

        route::get('/incover/{id}', [
            'as'   => 'movies_incover',
            'uses' => 'MoviesController@incover'
        ])->where('id', '[0-9]+');

    });

/*===============================================*/
/*========== routing de page categories===========*/
/*===============================================*/

    Route::group(['prefix' => '/categories'], function(){

        Route::get('/index', [
            'as'   => 'categories_index',
            'uses' => 'CategoriesController@index'
        ]);

        Route::get('/create', [
            'as'   => 'categories_create',
            'uses' => 'CategoriesController@create'
        ]);

        Route::post('/store', [
            'as'   => 'categories_store',
            'uses' => 'CategoriesController@store'
        ]);

        Route::get('/show/{id}', [
            'as'   => 'categories_show',
            'uses' => 'CategoriesController@show'
        ])->where('id', '[0-9]+');

        Route::get('/edit/{id}', [
            'as'   => 'categories_edit',
            'uses' => 'CategoriesController@edit'
        ])->where('id', '[0-9]+');

        Route::post('/update/{id}', [
            'as'   => 'categories_update',
            'uses' => 'CategoriesController@update'
        ])->where('id', '[0-9]+');

        Route::get('/destroy/{id}', [
            'as'   => 'categories_destroy',
            'uses' => 'CategoriesController@destroy'
        ])->where('id', '[0-9]+');

    });

/*===============================================*/
/*=========== routing de page directors==========*/
/*===============================================*/

    Route::group(['prefix' => '/directors'], function(){

        Route::get('/index', [
            'as'   => 'directors_index',
            'uses' => 'DirectorsController@index'
        ]);

        Route::get('/create', [
            'as'   => 'directors_create',
            'uses' => 'DirectorsController@create'
        ]);

        Route::post('/store', [
            'as'   => 'directors_store',
            'uses' => 'DirectorsController@store'
        ]);

        Route::get('/show/{id}', [
            'as'   => 'directors_show',
            'uses' => 'DirectorsController@show'
        ])->where('id', '[0-9]+');

        Route::get('/edit/{id}', [
            'as'   => 'directors_edit',
            'uses' => 'DirectorsController@edit'
        ])->where('id', '[0-9]+');

        Route::post('/update/{id}', [
            'as'   => 'directors_update',
            'uses' => 'DirectorsController@update'
        ])->where('id', '[0-9]+');

        Route::get('/destroy/{id}', [
            'as'   => 'directors_destroy',
            'uses' => 'DirectorsController@destroy'
        ])->where('id', '[0-9]+');

    });

/*===============================================*/
/*=========== routing de page Actors==========*/
/*===============================================*/

    Route::group(['prefix' => '/actors'], function(){

        Route::get('/index', [
            'as'   => 'actors_index',
            'uses' => 'ActorsController@index'
        ]);

        Route::get('/create', [
            'as'   => 'actors_create',
            'uses' => 'ActorsController@create'
        ]);

        Route::post('/store', [
            'as'   => 'actors_store',
            'uses' => 'ActorsController@store'
        ]);

        Route::get('/show/{id}', [
            'as'   => 'actors_show',
            'uses' => 'ActorsController@show'
        ])->where('id', '[0-9]+');

        Route::get('/edit/{id}', [
            'as'   => 'actors_edit',
            'uses' => 'ActorsController@edit'
        ])->where('id', '[0-9]+');

        Route::post('/update/{id}', [
            'as'   => 'actors_update',
            'uses' => 'ActorsController@update'
        ])->where('id', '[0-9]+');

        Route::get('/destroy/{id}', [
            'as'   => 'actors_destroy',
            'uses' => 'ActorsController@destroy'
        ])->where('id', '[0-9]+');

    });




});
