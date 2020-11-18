<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Committee;
use App\Models\Legality;
use App\Models\PeopleSay;
use App\Models\Sponsoors;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $legality = Legality::all();
        $sponsor = Sponsoors::where('visibility', 1)->get();
        $people = PeopleSay::where('visibility', 1)->get();
        return view('frontant.about', get_defined_vars());
    }
}
