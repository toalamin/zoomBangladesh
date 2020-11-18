<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {

    
        return view('frontant.contact');
    }

    public function store(Request $request)
    {


       


        $validator = Validator::make($request->all(), [
            'name' => 'required|max:55|min:4',
            'email' => 'required|email|unique:contacts|max:55',
            'subject' => 'required|max:100',
            'message' => 'required|max:500',

        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $notice = new Contact();
        $notice->name = $request->name;
        $notice->email = $request->email;
        $notice->phone = $request->phone;
        $notice->subject = $request->subject;
        $notice->message = $request->message;
        $notice->save();
        alert()->success('Your contact request successfully save in our system.', 'Successfully!');

        return redirect()->route('index');
    }
}
