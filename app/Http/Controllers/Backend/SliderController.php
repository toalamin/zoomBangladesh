<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use App\models\Slider;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{


    public function index()
    {

        $slider = Slider::orderBy('id', 'DESC')->get();
        return view('backend.slider.slider', get_defined_vars());
    }


    public function create()
    {
        return view('backend.slider.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:sliders|max:200',
            'description' => 'required|max:800',
            'file' => 'required | mimes:jpeg,jpg',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        
       // echo $logo;die("test");
        
        $slider = new Slider();
        $slider->image = $logo;
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->visibility = $request->status;
        $slider->save();
        alert()->success('New slider added.', 'Successfully!');
        return redirect()->route('slider.page');
    }

    public function edit($id)
    {
        $editSlider = Slider::findOrFail($id);
        return view('backend.slider.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|unique:sliders,title,' . $id,
            'description' => 'required|max:800',
            'file' => 'nullable|image',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $slider = new Slider();
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $slider->where('id', $id)->update($data);
        alert()->success('New slider added.', 'Successfully!');
        return redirect()->route('slider.page');
    }



    public function destroy(Request $request, $id)
    {
        $delete = Slider::destroy($id);
        if ($delete)
            alert()->success('Slider Successfully deleted.', 'Successfully!');
        return redirect()->route('slider.page');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('file')) return null;

        $file = $request->file('file');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path().'/frontant/slider/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }


        Image::make($file)
            ->resize(1920, 1088)
            ->save($path . $file_name);

        return $file_name;
    }
}
