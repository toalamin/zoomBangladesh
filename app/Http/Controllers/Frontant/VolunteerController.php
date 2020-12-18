<?php

namespace App\Http\Controllers\Frontant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Models\Member;
use App\models\Team;
use App\Models\Team_category;

class VolunteerController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryWiseTeam = Team_category::with('teams')->where('id',1)->get();
        return view('frontant.volunteer',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.member.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


            // echo "<Pre>";
            // print_r($_POST);
            // die();

            
        $validator = Validator::make($request->all(), [
            'divission' => 'required',
            'district' => 'required|max:100',
            'gender' => 'required|max:100',
            'blood_group' => 'required|max:100',
            'email' => 'nullable|max:100',
            'phone' => 'nullable|max:100',
            'full_name' => 'nullable|max:100',
            'present_address' => 'required|max:200',
            'short_description' => 'required|max:200',
            'image' => 'required | mimes:jpeg,jpg',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $team = new Team();
        $team->image = $logo ?? null;
        $team->short_description = $request->short_description;
        $team->present_address = $request->present_address;
        $team->full_name = $request->full_name;
        $team->phone = $request->phone;
        $team->email = $request->email;
        $team->blood = $request->blood_group;
        $team->gender = $request->gender;
        $team->district = $request->district;
        $team->divission = $request->divission;
        $team->team_category_id = 1;
        $team->save();
        alert()->success('Your application successfully received.', 'Successfully!');
        return redirect()->route('volunteer.page');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::findorFail($id);
        return view('backend.member.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'full_name' => 'required|max:100',
            'father' => 'required|max:100',
            'email' => 'required|email|max:100|unique:members,email,'.$id,
            'phone' => 'required|unique:members,phone,'.$id,
            'facebook' => 'required|max:50|unique:members,facebook,'.$id,
            'linked' => 'nullable|max:100|unique:members,linked,'.$id,
            'instagram' => 'nullable|max:100|unique:members,instagram,'.$id,
            'present_address' => 'required|max:200',
            'permanent_address' => 'required|max:200',
            'education' => 'required|max:100',
            'last_institution' => 'required|max:200',
            'designation' => 'required|max:100',
            'file' => 'nullable | mimes:jpeg,jpg',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $member = Member::find(1);
        $member->image = $logo ?? $request->old_image;
        $member->type = $request->type;
        $member->full_name = $request->full_name;
        $member->father = $request->father;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->facebook = $request->facebook;
        $member->linked = $request->linked;
        $member->instagram = $request->instagram;
        $member->present_address = $request->present_address;
        $member->permanent_address = $request->permanent_address;
        $member->education = $request->education;
        $member->last_institution = $request->last_institution;
        $member->designation = $request->designation;
        $member->visibility = $request->status;
        $member->save();
        alert()->success('member update.', 'Successfully!');
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Member::destroy($id);
        if ($delete)
            alert()->success('Member successfully deleted.', 'Successfully!');
        return redirect()->route('member.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('image')) return null;
        $file = $request->file('image');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path().'/frontant/team/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }

        Image::make($file)
            ->resize(500, 400)
            ->save($path . $file_name);
        return $file_name;
    }

}
