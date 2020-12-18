<?php

namespace App\Http\Controllers\Backend;

use App\models\Fundraise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class FundraiseController extends Controller
{
    public function index()
    {

        $fundraise = Fundraise::orderBy('id', 'DESC')->get();
        return view('backend.fundraise.index', get_defined_vars());
    }


    public function create()
    {
        return view('backend.fundraise.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200',
         
            'file' => 'required | mimes:jpeg,jpg',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        
       // echo $logo;die("test");
        
        $slider = new Fundraise();
        $slider->image = $logo;
        $slider->title = $request->title;
        $slider->description = 'tet';
        $slider->visibility = $request->status;
        $slider->save();
        alert()->success('New Fund Raise added.', 'Successfully!');
        return redirect()->route('fundraise.index');
    }

    public function edit($id)
    {
        $fundraise = Fundraise::findOrFail($id);
        return view('backend.fundraise.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|',
          
            'file' => 'nullable|image',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $slider = new Fundraise();
        $data = [
            'title' => $request->title,
            'description' =>'test',
            'image' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $slider->where('id', $id)->update($data);
        alert()->success('New Fund Raise added.', 'Successfully!');
        return redirect()->route('fundraise.index');
    }



    public function destroy(Request $request, $id)
    {
        $delete = Fundraise::destroy($id);
        if ($delete)
            alert()->success('Fund Raise Successfully deleted.', 'Successfully!');
        return redirect()->route('fundraise.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('file')) return null;

        $file = $request->file('file');
        $file_name =time().'.'.$file->getClientOriginalExtension();
        $path = base_path().'/frontant/fundraise/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }


        Image::make($file)
            ->resize(350, 300)
            ->save($path . $file_name);

        return $file_name;
    }
}
