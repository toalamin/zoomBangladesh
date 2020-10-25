<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Speech;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function index()
    {
        $speech = Speech::paginate(10);
        return view('frontant.donate', get_defined_vars());
    }
}
