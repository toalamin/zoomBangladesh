<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Member;
use Illuminate\Http\Request;

class LifetimeMemberController extends Controller
{
    public function index(){
        $member = Member::where('type', 2)->orderBy('id','desc')->paginate(10);//Lifetime  memeber
        return view('frontant.lifetimeMember',get_defined_vars());
    }
}
