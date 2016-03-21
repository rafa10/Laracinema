<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comments extends Model
{
    protected $table = 'comments';

    public function getNbComments()
    {
        $nbComments = DB::table('comments')
                                    ->where('state', 2)
                                    ->count();

        return $nbComments;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function movies()
    {
        return $this->belongsTo('App\Movies');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getLastFiveComments()
    {
        $lastFiveComments = Comments::orderby('created_at','desc')
                                      ->take(5)
                                      ->get();
        return $lastFiveComments;
    }
}
