<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['*'];

    public function department()
    {
        return $this->belongsTo('App\Department', 'dept_id', 'id');
    }

    public function designation()
    {
        return $this->belongsTo('App\Designation', 'desig_id', 'id');
    }
}
