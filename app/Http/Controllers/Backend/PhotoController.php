<?php

namespace App\Http\Controllers\Backend;

use App\models\Photo;
use App\models\Gallery_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo = Photo::with('category')->get();
        return view('backend.photo.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category = Gallery_category::all();

        // echo "<pre>";
        // print_r($category);
        // die();


        return view('backend.photo.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|max:200',
            'title' => 'required|unique:photos|max:200',
            'file' => 'required | mimes:jpeg,jpg',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $photo = new Photo();
        $photo->image = $logo ?? null;
        $photo->title = $request->title;
        $photo->category_id = $request->category_id;
        $photo->visibility = $request->status;
        $photo->save();
        alert()->success('New photo added.', 'Successfully!');
        return redirect()->route('photo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Gallery_category::all();
        $photo = Photo::findorFail($id);
        return view('backend.photo.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|unique:photos,title,' . $id,
            'category_id' => 'required',
            'file' => 'nullable|mimes:jpeg,jpg',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $photo = new Photo();
        $data = [
            'title' => $request->title,
            'image' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $photo->where('id', $id)->update($data);
        alert()->success('Photo Updated', 'Successfully!');
        return redirect()->route('photo.index');
    }

    public function destroy($id)
    {
        $delete = Photo::destroy($id);
        if ($delete)
            alert()->success('Photo info successfully deleted.', 'Successfully!');
        return redirect()->route('photo.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('file')) return null;

        $file = $request->file('file');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path().'/frontant/photo/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }

        Image::make($file)
            ->resize(800, 600)
            ->save($path . $file_name);
        return $file_name;
    }
}
