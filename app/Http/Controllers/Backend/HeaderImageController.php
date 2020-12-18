<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\HeaderImage;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class HeaderImageController extends Controller
{
    public function index()
    {

        $header = HeaderImage::orderBy('id', 'DESC')->get();
        return view('backend.header.index', get_defined_vars());
    }


    public function create()
    {
        return view('backend.header.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:people_says|max:200',
            'file' => 'required | mimes:jpeg,jpg',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);



        $header = new HeaderImage();
        $header->image = $logo;
        $header->title = $request->title;
        $header->visibility = $request->status;
        $header->save();
        alert()->success('New Header Image added.', 'Successfully!');
        return redirect()->route('header.index');
    }

    public function edit($id)
    {
        $header = HeaderImage::findOrFail($id);
        return view('backend.header.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|',
            'image' => 'nullable | mimes:jpeg,jpg,png',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $header = new HeaderImage();
        $data = [
            'title' => $request->title,
            'image' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $header->where('id', $id)->update($data);
        alert()->success('Header Image Update', 'Successfully!');
        return redirect()->route('header.index');
    }



    public function destroy(Request $request, $id)
    {
        $delete = HeaderImage::destroy($id);
        if ($delete)
            alert()->success('Header Image successfullly deleted.', 'Successfully!');
        return redirect()->route('header.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('file')) return null;

        $file = $request->file('file');
        $file_name =time().'.'.$file->getClientOriginalExtension();
        $path = base_path() . '/frontant/header/';
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
