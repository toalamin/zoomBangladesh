<?php

namespace App\Models;

use App\models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team_category extends Model
{
    use SoftDeletes;
    public function teams()
    {
        return $this->hasMany(Team::class,'team_category_id','id');
    }
}
