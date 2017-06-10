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
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Get the route key name for Laravel.
     * This basiccaly gives you a nicer url so you can go
     * to a profile with the name and not the id of the user.
     * YOU CAN REMOVE THIS IF YOU WANT.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'name';
    }
}
