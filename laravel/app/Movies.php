<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Movies extends Model
{

    protected  $table = "movies";

    protected  $fillable = ['type', 'title', 'description', 'languages', 'image', 'trailer', 'categories_id','distributeur', 'bo', 'annee', 'budget', 'duree', 'date_release', 'note_presse', 'visible', 'cover', 'shop', 'slug', 'views', 'categories_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        //relation (1..1) un movies many to one categories
        return $this->belongsTo('App\Categories');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sessions()
    {
        return $this->hasMany('App\Sessions');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comments');
    }


    // SQL Query
    // SELECT COUNT(*) FROM MOVIES WHERE visible = 1
    public function getNbMoviesActifs()
    {
        $nbMovies = DB::table('movies')
                                ->where('visible', 1)
                                ->count();

        return $nbMovies;

    }

    public function getTotalBudget()
    {
        $totalBudget = DB::table('movies')
                                    ->SUM(DB::raw('budget'));
        $totalBudget = round($totalBudget);
        return $totalBudget;
    }

    public function getMoyDureeMovies()
    {
        $moyDuree = DB::table('movies')
                                ->AVG(DB::raw('duree'));
        $moyDuree = round($moyDuree);
        return $moyDuree;
    }

    public function getMoyNote()
    {
        $moyNote = DB::table('movies')
                                ->AVG(DB::raw('note_presse'));
//        $moyNote = round($moyNote);
        return $moyNote;
    }

    public function getRandTrailer()
    {
        $randTrailer = DB::table('movies')
                                    ->orderByRaw('RAND()')
                                    ->first();
        return $randTrailer;
     }

    public function getBudgetByDistributor()
    {
        $sumBudget = DB::table('movies')
                                ->select('distributeur', DB::raw( 'SUM(budget) as totalBudget'))
                                ->groupby('distributeur')
                                ->get();

        return $sumBudget;
    }

}