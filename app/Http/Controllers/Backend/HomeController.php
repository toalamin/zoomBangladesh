<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\Committee;
use App\models\Contact;
use App\models\Member;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    

    public function dashboard()
    {
        $general = Member::where('type',1)->count();
        $lifetime = Member::where('type',2)->count();
        $executive = Committee::where('type',1)->count();
        $adviser = Committee::where('type',2)->count();
        $member = Committee::count();
        $memberList = Member::where('visibility',1)->orderBy('id','DESC')->limit(10)->get();
      
        return view('backend.dashboard.dashboard',get_defined_vars());
    }


    public function contact()
    {
        $contact = Contact::all();
        return view('backend.contact.index',get_defined_vars());
    }

}
