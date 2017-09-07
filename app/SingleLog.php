<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleLog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'customer_id', 'custom_message_id', 'group_id'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function message()
    {
        return $this->hasOne('App\CustomMessage');
    }

    public function group()
    {
        return $this->belongsTo('App\GroupLog');
    }
}
