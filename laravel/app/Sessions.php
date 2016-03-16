<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sessions extends Model
{
    protected $table = 'sessions';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function movies()
    {
        return $this->belongsTo('App\Movies');
    }

    public function cinema()
    {
        return $this->belongsTo('App\Cinema');
    }


    public function getNbSessions()
    {
        $nbSessions = DB::table('sessions')
                                ->where('date_session', '>' , (Carbon::now()))
                                ->count();

        return $nbSessions;
    }

    public function getNextSessions()
    {
        $nextSessions = Sessions::where('date_session', '>' , (Carbon::now()))
                                ->orderby('date_session', 'desc')
                                ->take(10)
                                ->get(); // la méthode "get()" perment de transformer la résultat en table
        return $nextSessions;
    }
}
