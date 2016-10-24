<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'tb_payments';

    public function ticket()
    {
        return $this->hasMany('App\Ticket');
    }
}
