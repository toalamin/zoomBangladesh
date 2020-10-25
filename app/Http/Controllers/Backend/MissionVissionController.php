<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use App\models\Mission;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class MissionVissionController extends Controller
{


    public function index()
    {

        $mission = Mission::orderBy('id', 'DESC')->first();
        return view('backend.mission.index', get_defined_vars());
    }






    public function edit($id)
    {
        $editMission = Mission::findOrFail($id);
        return view('backend.mission.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|unique:missions,title,' . $id,
            'description' => 'required',


        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mission = new Mission();
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'visibility' => 1,
        ];
        $mission->where('id', $id)->update($data);
        alert()->success('Mission Information updated', 'Successfully!');
        return redirect()->route('mission.index');
    }
}
