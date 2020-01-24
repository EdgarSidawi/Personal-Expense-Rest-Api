<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionModel extends Model
{
    protected $guarded = [];

    public function expense(){
        return $this->hasMany(ExpenseModel::class);
    }
}
