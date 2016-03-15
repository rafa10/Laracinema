<?php

namespace App\Http\Controllers;


use App\Actors;
use App\Categories;
use App\Comments;
use App\Directors;
use App\Movies;
use App\Sessions;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index()
    {
        $totalMovies    = Movies::all();
        $totalComments  = Comments::all();
        $totalUser      = User::all();
//      $directors = Directors::all();

        $movies = new Movies();
        $nbMovies = $movies->getNbMoviesActifs();

        $comments = new Comments();
        $nbComments = $comments->getNbComments();

        $sessions = new Sessions();
        $nbSessions = $sessions->getNbSessions();

        $user = new User();
        $nbUser = $user->getNbUserActif();

        return view(" /welcome ", compact('nbMovies', 'totalMovies', 'nbComments', 'totalComments','nbSessions','totalUser','nbUser'));
    }




}