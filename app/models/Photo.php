<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use SoftDeletes;


    public function category()
    {
        return $this->belongsTo(Gallery_category::class, 'category_id', 'id');
    }

    
}
