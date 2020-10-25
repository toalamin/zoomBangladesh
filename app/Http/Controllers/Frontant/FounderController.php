<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Committee;
use Illuminate\Http\Request;

class FounderController extends Controller
{
    public function index()
    {
        return view('frontant.founderMessage', get_defined_vars());
    }
}
