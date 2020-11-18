<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery_category extends Model
{
    use SoftDeletes;
    public function photos()
    {
        return $this->hasMany(Photo::class, 'category_id', 'id');
    }
}
