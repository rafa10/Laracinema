<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /**
     * Nom de table
     * @var string
     */
    protected  $table = "categories";

    protected  $fillable = ['title', 'description', 'slug', 'image'];

    public function movies()
    {
        // relation (1..+) un categories one to many movies//
        return $this->hasMany('App\Movies');
    }
}