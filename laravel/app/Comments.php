<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comments extends Model
{
    protected $table = 'comments';

    public function getNbComments()
    {
        $nbComments = DB::table('comments')->where('state', 2)->count();

        return $nbComments;
    }
}
