<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getNbUserActif()
    {
        $nbUser = DB::table('user')->where('enabled', 1)->count() ;

        return $nbUser;
    }


}
