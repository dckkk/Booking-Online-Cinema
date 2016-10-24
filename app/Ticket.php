<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tb_tickets';

    public function payment() 
    {
        return $this->belongsTo('App\Payment');
    }

    public function venue() 
    {
        return $this->hasMany('App\Venue');
    }

    public function seat()
    {
        return $this->hasMany('App\Seat');
    }

    public function harga()
    {
        return $this->hasMany('App\Harga');
    }
}
