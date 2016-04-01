<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function search(/*Request $request*/)
    {
//      $query = $request->input('search');
//      == ou bien ==
        $query = Input::get('search');


        $querySearch = DB::table("movies AS m")
                            ->select('c.title AS cTitle',
                                     'm.title AS mTitle','m.synopsis AS mSynopsis','m.description AS mDescription','m.image AS mImage','m.type As mType','m.languages AS mlang','m.annee AS mAnnee','m.budget AS mBudget',
                                     'a.firstname AS aFirstname','a.lastname AS aLastname','a.image AS aImage',
                                     'd.firstname AS dFirstname','d.lastname AS dLastname','d.image AS dImage')
                            //jointure entre "movies" et "categories"
                            ->leftJoin("categories AS c", 'c.id' , '=' , 'm.categories_id')
                            //jointure entre "actors" et "movies" et  "actors_movies"
                            ->leftJoin("actors_movies AS am", 'am.movies_id' , '=' , 'm.id')
                            ->leftJoin("actors AS a", 'am.actors_id' , '=' , 'a.id')
                            //jointure entre "movies" et "directors" et "directors_movies"
                            ->leftJoin("directors_movies AS dm", 'dm.movies_id' , '=' , 'm.id')
                            ->leftJoin("directors AS d", 'dm.directors_id' , '=' , 'd.id')
                            // les condition "where"
                            ->where('m.title', 'LIKE', '%'.$query.'%')
                            ->orWhere('m.description', 'LIKE', '%'.$query.'%')
                            ->orwhere('m.synopsis', 'LIKE', '%'.$query.'%')
                            ->orWhere('c.title', 'LIKE', '%'.$query.'%')
                            ->orwhere('a.firstname', 'LIKE', '%'.$query.'%')
                            ->orwhere('a.lastname', 'LIKE', '%'.$query.'%')
                            ->orwhere('d.firstname', 'LIKE', '%'.$query.'%')
                            ->orwhere('d.lastname', 'LIKE', '%'.$query.'%')
                            ->groupby('m.id')
                            ->paginate(5);

        return view('search', compact('querySearch', 'query'));
    }



}
