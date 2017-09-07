<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupLog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name'
    ];

    public function logs()
    {
        return $this->hasMany('App\SingleLog');
    }
}
