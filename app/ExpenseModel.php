<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseModel extends Model
{
    protected $guarded =[];

    public function session(){
        return $this->belongsTo(SessionModel::class);
    }
}
