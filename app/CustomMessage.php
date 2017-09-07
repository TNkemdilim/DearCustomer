<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomMessage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'text', 'user_id'
    ];

    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function logs()
    {
        return $this->belongsToMany('App\SingleLog');
    }
}
