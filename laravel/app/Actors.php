<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    /**
     * @var string
     */
    protected $table = "actors";

    protected $fillable = ['firstname', 'lastname', 'dob', 'city', 'image', 'nationality', 'biography', 'roles', 'slug', 'recompenses', 'created_at', '	updated_at'];


}
