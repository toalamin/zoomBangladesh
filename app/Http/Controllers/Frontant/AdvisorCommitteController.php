<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Committee;
use Illuminate\Http\Request;

class AdvisorCommitteController extends Controller
{
    public function index()
    {
        $adviser = Committee::with('member')->where('type', 2)->orderBy('id', 'desc')->paginate(10);
        return view('frontant.advisorCommitte', get_defined_vars());
    }
}
