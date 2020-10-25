<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use App\models\HistoricalPlace;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class HistoricalPlaceController extends Controller
{


    public function index()
    {
        $historicalPlace = HistoricalPlace::orderBy('id', 'DESC')->get();
        return view('backend.historicalPlace.index', get_defined_vars());
    }
    public function create()
    {
        return view('backend.historicalPlace.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:historical_places|max:200',
            'description' => 'required|max:800',
            'file' => 'required | mimes:jpeg,jpg | dimensions:min_width:200,min_height:200',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $historicalPlace = new HistoricalPlace();
        $historicalPlace->image = $logo;
        $historicalPlace->title = $request->title;
        $historicalPlace->description = $request->description;
        $historicalPlace->visibility = $request->status;
        $historicalPlace->save();
        alert()->success('New Historical Place added.', 'Successfully!');
        return redirect()->route('historical.place.index');
    }

    public function edit($id)
    {
        $historicalPlace = HistoricalPlace::findOrFail($id);
        return view('backend.historicalPlace.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|unique:historical_places,title,' . $id,
            'description' => 'required|max:800',
            'file' => 'nullable|mimes:jpeg,jpg',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $slider = new HistoricalPlace();
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $slider->where('id', $id)->update($data);
        alert()->success('Historical Place Updated', 'Successfully!');
        return redirect()->route('historical.place.index');
    }



    public function destroy(Request $request, $id)
    {
        $delete = HistoricalPlace::destroy($id);
        if ($delete)
            alert()->success('Historical Place Successfully deleted.', 'Successfully!');
        return redirect()->route('historical.place.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('file')) return null;

        $file = $request->file('file');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = base_path('/uploads/historicalPlace/');
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }

        Image::make($file)
            ->resize(5000, 400)
            ->save($path . $file_name);

        return $file_name;
    }
}
