<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    protected $primaryKey = 'announce_id';

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
