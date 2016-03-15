<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sessions extends Model
{
    protected $table = 'sessions';

    public function getNbSessions()
    {
        $nbSessions = DB::table('sessions')->where('date_session', '>' , (Carbon::now()))->count();

        return $nbSessions;
    }
}
