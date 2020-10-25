<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Committee;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        return view('frontant.faq', get_defined_vars());
    }
}
