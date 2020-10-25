<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Committee;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('frontant.about', get_defined_vars());
    }
}
