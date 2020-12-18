<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\PeopleSay;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class PeopleSayController extends Controller
{
    public function index()
    {

        $people = PeopleSay::orderBy('id', 'DESC')->get();
        return view('backend.peoplesay.index', get_defined_vars());
    }


    public function create()
    {
        return view('backend.peoplesay.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:people_says|max:200',
            'description' => 'required',
            'designation' => 'required|max:500',
            'image' => 'required | mimes:jpeg,jpg',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);

       

        $PeopleSay = new PeopleSay();
        $PeopleSay->image = $logo;
        $PeopleSay->name = $request->name;
        $PeopleSay->description = $request->description;
        $PeopleSay->designation = $request->designation;
        $PeopleSay->visibility = $request->status;
        $PeopleSay->save();
// echo "<pre>";
// print_r($PeopleSay);
// die;


        alert()->success('New People Say added.', 'Successfully!');
        return redirect()->route('people.index');
    }

    public function edit($id)
    {
        $people = PeopleSay::findOrFail($id);
        return view('backend.peoplesay.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:200|unique:people_says,name,' . $id,
            'description' => 'required',
            'designation' => 'required|max:500',
            'image' => 'nullable | mimes:jpeg,jpg,png',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $peopleSay = new PeopleSay();
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'designation' => $request->designation,
            'image' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $peopleSay->where('id', $id)->update($data);
        alert()->success('New People Say added.', 'Successfully!');
        return redirect()->route('people.index');
    }



    public function destroy(Request $request, $id)
    {
        $delete = PeopleSay::destroy($id);
        if ($delete)
            alert()->success('Project Category Successfully deleted.', 'Successfully!');
        return redirect()->route('people.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('image')) return null;

        $file = $request->file('image');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = base_path() . '/frontant/people/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }
        Image::make($file)
            ->resize(1200, 800)
            ->save($path . $file_name);
        return $file_name;
    }
}
