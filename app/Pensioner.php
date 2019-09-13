<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensioner extends Model
{
    //
    public function employee()
    {
        return $this->belongsTo('App\Employee', 'emp_id', 'id');
    }
}
