<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Committee;
use Illuminate\Http\Request;

class ExecutiveCommitteController extends Controller
{
    public function index()
    {
        $executive = Committee::with('member')->where('type', 1)->orderBy('id', 'desc')->paginate(10);
        return view('frontant.executiveCommitte', get_defined_vars());
    }
}
