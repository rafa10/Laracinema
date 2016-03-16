<?php

namespace App\Http\Controllers;


use App\Actors;
use App\Categories;
use App\Comments;
use App\Directors;
use App\Medias;
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
        $totalCategories = Categories::all();
        $totalActors = Actors::all();
        $totalSessions = Sessions::all();
        $totalDirectors = Directors::all();
        $totalMedias = Medias::all();
        $totalComments  = Comments::all();
        $totalUser      = User::all();

        //nombre des movies visible
        $movies = new Movies();
        $nbMovies = $movies->getNbMoviesActifs();

        //nombre de comments
        $comments = new Comments();
        $nbComments = $comments->getNbComments();

        //nombre des session actif
        $sessions = new Sessions();
        $nbSessions = $sessions->getNbSessions();

        // nombre d'user actif
        $user = new User();
        $nbUser = $user->getNbUserActif();

        //moyenne des age
        $actors = new Actors();
        $moyAge = $actors->getMoyAgeActors();

        //moyenne duree movies
        $moyDuree = $movies->getMoyDureeMovies();

        //total buget movies
        $totalBudget = $movies->getTotalBudget();

        // moyenne de note_presse des movies
        $moyNote = $movies->getMoyNote();

        // 16 dernier user en ligne
        $userActif = $user->getUserActif();

        // 10 dernier sessions movies
        $nextSessions = $sessions->getNextSessions();


        // relation entre la table movies --> sessions
        $moviesSessions = Sessions::find(1)->movies;
        $cinema = Sessions::find(1)->cinema;

        $randTrailer = $movies->getRandTrailer();

        return view(" /welcome ", compact(
            'nbMovies',
            'totalMovies',
            'nbComments',
            'totalComments',
            'nbSessions',
            'totalUser',
            'nbUser',
            'moyAge',
            'moyDuree',
            'totalBudget',
            'moyNote',
            'userActif',
            'nextSessions',
            'totalCategories',
            'totalActors',
            'totalSessions',
            'totalDirectors',
            'totalMedias',
            'randTrailer'
            ));
    }




}