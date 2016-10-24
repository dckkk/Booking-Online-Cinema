<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $table = 'tb_venue';

    public function ticket()
    {
        return $this->belongsTo('App\Ticket');
    }

    public function movies()
    {
        return $this->hasMany('App\Movies');
    }
}
