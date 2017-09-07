<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'user_id', 'name', 'address', 'city', 'state', 'phone_no', 'email', 'sender_name'
    ];

    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function logs()
    {
        return $this->hasManyThrough('App\SingleLog', 'App\Customer', 'company_id', 'customer_id', 'id');
    }
}
