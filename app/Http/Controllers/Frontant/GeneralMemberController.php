<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Member;
use Illuminate\Http\Request;

class GeneralMemberController extends Controller
{
    public function index()
    {
        $member = Member::where('type', 1)->orderBy('id','desc')->paginate(10);//general memeber
        return view('frontant.generalMember', get_defined_vars());
    }
}
