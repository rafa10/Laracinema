<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Directors extends Model
{
    /**
     * Nom de table
     * @var string
     */
    protected  $table = "directors";

    protected $fillable = ['firstname', 'lastname', 'dob', 'biography', 'image', 'note'];

    protected $dates = ['dob'];
}