<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speech extends Model
{
    use SoftDeletes;
    protected $table='speeches';
}
