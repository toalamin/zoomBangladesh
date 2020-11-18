<?php

namespace App\Http\Controllers\Frontant;

use App\models\Video;
use App\models\Donate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\models\Account;
use App\models\CurrentDonation;
use App\Models\Project_category;
use Intervention\Image\Facades\Image;

class DonateController extends Controller
{
    public function index()
    {
        $donate = Donate::paginate(10);
        $account = Account::where('visibility',1)->get();
        $project = Project_category::where('visible',1)->get();
        $current = CurrentDonation::where('visibility',1)->orderBy('id','desc')->first();
        return view('frontant.donate', get_defined_vars());
    }

    public function store(Request $request)
    {


        // echo "<pre>";
        // print_r($_POST);
        // die();

        $validator = Validator::make($request->all(), [
            'project_category_id' => 'required',
            'payment_type' => 'required|max:100',
            'donate_type' => 'required|max:100',
            'country' => 'required|max:100',
            'full_name' => 'required|max:20',
            'phone' => 'nullable|max:100',
            'amount' => 'nullable|max:100',
            'email' => 'nullable|max:100',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //$logo = $this->uploadSliderImage($request);
        $donate = new Donate();
        $donate->project_category_id = $request->project_category_id;
        $donate->payment_type = $request->payment_type;
        $donate->donate_type = $request->donate_type;
        $donate->country = $request->country;
        $donate->full_name = $request->full_name;
        $donate->phone = $request->phone;
        $donate->email = $request->email;
        $donate->amount = $request->amount;
        $donate->save();
        alert()->success('Your donamtion successfully save in our database.', 'Successfully!');
        return redirect()->route('donate.page');
        
    }
}
