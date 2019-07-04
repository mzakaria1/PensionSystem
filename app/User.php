<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Role;

class User extends Model
{
    //

    protected $fillable = [
        'username', 'email'
    ];


    public function role()
    {
        return $this->belongsTo('Role');
    }
}
