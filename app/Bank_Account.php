<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_Account extends Model
{
    //

    public function bank()
    {
        return $this->belongsTo('App\Bank');
    }
}
