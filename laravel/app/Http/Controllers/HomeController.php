<?php

namespace App\Http\Controllers;


use App\Actors;
use App\Categories;
use App\Directors;
use App\Movies;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index()
    {
        $movies     = Movies::all();
        $categories = Categories::all();
        $actors     = Actors::all();
        $directors = Directors::all();



        return view(" /welcome ", compact('movies', 'categories', 'actors', 'directors'));
    }




}