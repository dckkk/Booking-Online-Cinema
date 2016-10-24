<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $table = 'tb_movies';

    public function venue() 
    {
        return $this->belongsTo('App\Venue');
    }
}
