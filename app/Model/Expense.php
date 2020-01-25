<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $guarded =[];

    public function session(){
        return $this->belongsTo(Session::class);
    }
}
