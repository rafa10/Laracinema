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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//
//    /**
//     * Show the application dashboard.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        return view('home');
//    }
    public function dashboard()
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
        // selectionné un tralier d'un film aléatoire
        $randTrailer = $movies->getRandTrailer();
        //clacluer sum budget
        $sumBudget = $movies->getBudgetByDistributor();

        // 5 last comments
        $user = Comments::find(3)->user;
        $movies = Comments::find(3)->movies;
        $lastFiveComments = $comments->getLastFiveComments();

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
            'randTrailer',
            'sumBudget',
            'lastFiveComments'
        ));
    }

    public function authenticate(){

        return view("/login");

    }

}
