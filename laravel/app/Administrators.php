<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Administrators
 * Authenti
 * @package App
 */

class Administrators extends Authenticatable
{
    protected $table = 'administrators';


    protected $fillable = [
        'lastname', 'firstname', 'photo', 'description', 'email', 'password'
    ];

    protected  $hidden = [
      'password', 'remember_token'
    ];
}
