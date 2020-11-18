<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Committee;
use App\models\Fundraise;
use Illuminate\Http\Request;

class FundraisedController extends Controller
{
    public function index()
    {
        $fundraise = Fundraise::paginate(10);

        return view('frontant.fundraised', get_defined_vars());
    }
}
