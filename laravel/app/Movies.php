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


    // SQL Query
    // SELECT COUNT(*) FROM MOVIES WHERE visible = 1
    public function getNbMoviesActifs()
    {
        $nbMovies = DB::table('movies')->where('visible', 1)->count();

        return $nbMovies;

    }
}