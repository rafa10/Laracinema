<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Actors extends Model
{
    /**
     * @var string
     */
    protected $table = "actors";

    protected $fillable = ['firstname', 'lastname', 'dob', 'city', 'image', 'nationality', 'biography', 'roles', 'slug', 'recompenses', 'created_at', '	updated_at'];

    protected $dates = ['dob'];

    public function getMoyAgeActors()
    {
        $moyAge = DB::table('actors')->AVG(DB::raw('YEAR(SUBDATE(NOW(),TO_DAYS(dob)))'));
        $moyAge = round($moyAge);
        return $moyAge;
    }
}
