<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'email', 'firstname', 'lastname', 'company_id'
    ];

    public function company()
    {
        return $this->belongsTo('App\Company', 'company_id');
    }

    public function logs()
    {
        return $this->hasMany('App\SingleLog', 'customer_id');
    }

    public function messages()
    {
        return $this->hasManyThrough('App\CustomMessage', 'App\SingleLog', 'custom_message_id', 'user_id', 'id');
    }
}
