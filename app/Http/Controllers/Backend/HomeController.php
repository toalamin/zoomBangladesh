<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\Contact;
use App\models\Member;
use App\models\Slider;
use App\models\SystemConfig;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{


    public function dashboard()
    {
        $general = Member::where('type', 1)->count();
        $lifetime = Member::where('type', 2)->count();
        $memberList = Member::where('visibility', 1)->orderBy('id', 'DESC')->limit(10)->get();
        
        return view('backend.dashboard.dashboard', get_defined_vars());
    }


    public function contact()
    {
        $contact = Contact::all();
        return view('backend.contact.index', get_defined_vars());
    }


    public function systemConfig()
    {

        $systemConfig = SystemConfig::first();
        return view('backend.dashboard.system', get_defined_vars());
    }


    public function systemConfigEdit($id)
    {

        $systemConfig = SystemConfig::findOrFail($id);
        return view('backend.dashboard.systemEdit', get_defined_vars());
    }


    public function systemConfigUpdate(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'website' => 'required|max:100',
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'phone' => 'required|max:100',
            'address' => 'required|max:100',
            'fb_link' => 'required|max:200',
            'youtube_link' => 'nullable|max:200',
            'skypee' => 'nullable|max:200',
            'instagram_link' => 'nullable|max:200',
            'twitter_link' => 'nullable|max:200',
            'linkedin' => 'nullable|max:200',
            'logo' => 'required | mimes:jpeg,jpg,png',
            'default_banner_image' => 'required | mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadLogo($request);

       


        $bannar = $this->uploadBanner($request);
        $systemInfo =  SystemConfig::findOrFail($id);
        $systemInfo->website = $request->website;
        $systemInfo->name = $request->name;
        $systemInfo->email = $request->email;
        $systemInfo->phone = $request->phone;
        $systemInfo->address = $request->address;
        $systemInfo->logo = $logo;
        $systemInfo->default_banner_image = $bannar;
        $systemInfo->fb_link = $request->fb_link;
        $systemInfo->youtube_link = $request->youtube_link;
        $systemInfo->skypee = $request->skypee;
        $systemInfo->instagram_link = $request->instagram_link;
        $systemInfo->twitter_link = $request->twitter_link;
        $systemInfo->linkedin = $request->linkedin;
        $systemInfo->save();
        alert()->success('System Config Updated.', 'Successfully!');
        return redirect()->route('index.systemConfig');
    }

    private function uploadLogo($request)
    {
        if (!$request->hasFile('logo')) return null;

        $file = $request->file('logo');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path().'/frontant/images/logo/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }

        Image::make($file)
            ->resize(162, 70)
            ->save($path . $file_name);
        return $file_name;
    }


    private function uploadBanner($request)
    {
        if (!$request->hasFile('default_banner_image')) return null;

        $file = $request->file('default_banner_image');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path().'/frontant/images/banner/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }

        Image::make($file)
            ->resize(1200, 500)
            ->save($path . $file_name);

        return $file_name;
    }
}
