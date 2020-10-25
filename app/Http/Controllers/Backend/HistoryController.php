<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use App\models\History;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class HistoryController extends Controller
{


    public function index()
    {

        $history = History::orderBy('id', 'DESC')->first();
        return view('backend.history.index', get_defined_vars());
    }

    public function edit($id)
    {
        $editHistory = History::findOrFail($id);
        return view('backend.history.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|unique:histories,title,' . $id,
            'description' => 'required',
            'file' => 'nullable|mimes:jpeg,jpg',


        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $history = new History();
        $data = [
            'image' => $logo ?? $request->old_image,
            'title' => $request->title,
            'description' => $request->description,
            'visibility' => 1,
        ];
        $history->where('id', $id)->update($data);
        alert()->success('History Information updated', 'Successfully!');
        return redirect()->route('history.index');
    }


    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('file')) return null;
       
        $file = $request->file('file');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = base_path('/uploads/history/');


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
