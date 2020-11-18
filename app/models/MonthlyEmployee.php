<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MonthlyEmployee extends Model
{
    use SoftDeletes;

    public function team(){
        return $this->belongsTo(Team::class,'employee_id','id');
    }
}
