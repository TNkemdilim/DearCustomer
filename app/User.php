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
        'firstname', 'lastname', 'email', 'picture_path', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function companies()
    {
        return $this->hasMany('App\Company');
    }

    public function customers()
    {
        return $this->hasMany('App\Customer');
    }

    public function custom_messages()
    {
        return $this->hasMany('App\CustomMessage');
    }
}
