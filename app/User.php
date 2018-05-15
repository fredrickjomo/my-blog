<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const ADMIN_TYPE='admin';
    const DEFAULT_TYPE='normal_user';

    public function isAdmin(){
        return  $this->type===self::ADMIN_TYPE;
    }

    protected $fillable = [
        'first_name','last_name','gender', 'email', 'password','photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}