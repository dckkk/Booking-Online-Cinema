<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    protected $table = 'tb_harga';

    public function ticket() 
    {
        return $this->belongsTo('App\Ticket');
    }
}
