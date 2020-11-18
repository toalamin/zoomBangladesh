<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use App\models\Team;
use App\Models\Team_category;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{
    public function index()
    {

        $team = Team::with('category')->orderBy('id', 'DESC')->get();
        return view('backend.teamm.index', get_defined_vars());
    }


    public function create()
    {
        $category = Team_category::all();
        return view('backend.teamm.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'team_category_id' => 'required',
            'full_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'designation' => 'required',
            'branch' => 'required',
            'fb_link' => 'required',
            'short_description' => 'required',
            'image' => 'required | mimes:jpeg,jpg',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);

        // echo $logo;die("test");

        $team = new Team();
        $team->image = $logo;
        $team->team_category_id = $request->team_category_id;
        $team->full_name = $request->full_name;
        $team->phone = $request->phone;
        $team->email = $request->email;
        $team->designation = $request->designation;
        $team->branch = $request->branch;
        $team->fb_link = $request->fb_link;
        $team->insta_link = $request->insta_link;
        $team->short_description = $request->short_description;
        $team->visibility = $request->visibility;
       
        $team->save();
        alert()->success('New Team added.', 'Successfully!');
        return redirect()->route('teamm.index');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $category = Team_category::all();
        return view('backend.teamm.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'team_category_id' => 'required',
            'full_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'designation' => 'required',
            'branch' => 'required',
            'fb_link' => 'required',
            'short_description' => 'required',
            'image' => 'nullable | mimes:jpeg,jpg',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $team = new Team();
        $data = [
            'team_category_id' => $request->team_category_id,
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'designation' => $request->designation,
            'branch' => $request->branch,
            'fb_link' => $request->fb_link,
            'short_description' => $request->short_description,
            'image' => $logo ?? $request->old_image,
            'visibility' => $request->visibility,
        ];
        $team->where('id', $id)->update($data);
        alert()->success('New team added.', 'Successfully!');
        return redirect()->route('teamm.index');
    }



    public function destroy(Request $request, $id)
    {
        $delete = Team::destroy($id);
        if ($delete)
            alert()->success('Team Successfully deleted.', 'Successfully!');
        return redirect()->route('teamm.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('image')) return null;

        $file = $request->file('image');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/frontant/team/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }


        Image::make($file)
            ->resize(360, 300)
            ->save($path . $file_name);

        return $file_name;
    }
}
