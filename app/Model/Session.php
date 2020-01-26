<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function expense(){
        return $this->hasMany(Expense::class);
    }
}
