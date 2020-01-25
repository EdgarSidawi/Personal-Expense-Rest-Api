<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded = [];

    public function expense(){
        return $this->hasMany(Expense::class);
    }
}
