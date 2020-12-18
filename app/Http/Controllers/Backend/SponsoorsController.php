<?php

namespace App\Http\Controllers\Backend;

use App\models\Sponsoors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class SponsoorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsor = Sponsoors::all();
        return view('backend.sponsor.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $category = Sponsoors::all();
        return view('backend.sponsor.create', get_defined_vars());
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
            'name' => 'required|unique:sponsoors|max:200',
            'file' => 'required ',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $sponsor = new Sponsoors();
        $sponsor->logo = $logo ?? null;
        $sponsor->name = $request->name;
        $sponsor->visibility = $request->status;
        $sponsor->save();
        alert()->success('New sponsor added.', 'Successfully!');
        return redirect()->route('sponsor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsoors $photo)
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
        
        $sponsor = Sponsoors::findorFail($id);
        return view('backend.sponsor.edit', get_defined_vars());
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
            'name' => 'required|max:200|unique:sponsoors,name,' . $id,
            'file' => 'nullable|mimes:jpeg,jpg',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $sponsor = new Sponsoors();
        $data = [
            'title' => $request->title,
            'logo' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $sponsor->where('id', $id)->update($data);
        alert()->success('Sponsor Updated', 'Successfully!');
        return redirect()->route('sponsor.index');
    }

    public function destroy($id)
    {
        $delete = Sponsoors::destroy($id);
        if ($delete)
            alert()->success('Sponsor successfully deleted.', 'Successfully!');
        return redirect()->route('sponsor.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('file')) return null;
        $file = $request->file('file');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = base_path().'/frontant/sponsor/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }

        Image::make($file)
            ->resize(200, 200)
            ->save($path . $file_name);
        return $file_name;
    }
}
