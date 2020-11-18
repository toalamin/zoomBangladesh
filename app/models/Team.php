<?php

namespace App\models;

use App\Models\Team_category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;


    public function category(){
        return $this->belongsTo(Team_category::class,'team_category_id','id');
    }
}
