<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comments');
    }



    public function getNbUserActif()
    {
        $nbUser = DB::table('user')
                            ->where('enabled', 1)
                            ->count() ;

        return $nbUser;
    }

    public function getUserActif()
    {
        $userActif = DB::table('user')
                                ->orderby('lastActivity', 'desc')
                                ->take(16)
                                ->get();

        return $userActif;
    }


}
