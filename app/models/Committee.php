<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Committee extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'type','member_id', 'designation', 'duration',
    ];

    public function member(){
        return $this->belongsTo(Member::class,'member_id','id');
    }

}
