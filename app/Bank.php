<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    //
    protected $fillable = [
        'name', 'branch_code', 'address'
    ];
    public function bank_accounts()
    {
        return $this->hasMany('App\Bank_Account');
    }
}
