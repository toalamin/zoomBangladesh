<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\Legality;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class LegalityController extends Controller
{
    public function index()
    {

        $legality = Legality::orderBy('id', 'DESC')->get();
        return view('backend.legality.index', get_defined_vars());
    }


    public function create()
    {
        return view('backend.legality.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:200',
            'regi_no' => 'required|max:200',
            'date' => 'required|max:200',
            'file' => 'required | mimes:jpeg,jpg',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);



        $header = new Legality();
        $header->certificate = $logo;
        $header->name = $request->name;
        $header->regi_no = $request->regi_no;
        $header->date = $request->date;
        $header->visibility = $request->status;
        $header->save();
        alert()->success('New Legality Information added.', 'Successfully!');
        return redirect()->route('legality.index');
    }

    public function edit($id)
    {
        $legality = Legality::findOrFail($id);
        return view('backend.legality.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:200|',
            'regi_no' => 'required|max:200|',
            'date' => 'required|max:200|',
            'file' => 'nullable | mimes:jpeg,jpg,png',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $legality = new Legality();
        $data = [
            'name' => $request->name,
            'date' => $request->date,
            'regi_no' => $request->regi_no,
            'name' => $request->name,
            'certificate' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $legality->where('id', $id)->update($data);
        alert()->success('New Legality Information Added', 'Successfully!');
        return redirect()->route('legality.index');
    }



    public function destroy(Request $request, $id)
    {
        $delete = Legality::destroy($id);
        if ($delete)
            alert()->success('New Legality Information successfully added.', 'Successfully!');
        return redirect()->route('header.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('file')) return null;

        $file = $request->file('file');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = base_path() . '/frontant/legality/';
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
