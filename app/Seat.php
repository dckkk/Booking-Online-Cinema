<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = 'tb_seat';

    public function ticket() 
    {
        return $this->belongsTo('App\Ticket');
    }
}
