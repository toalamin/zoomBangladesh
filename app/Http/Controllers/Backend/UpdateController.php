<?php

namespace App\Http\Controllers\Backend;

use App\models\Update;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $update = Update::all()->sortByDesc('id');
        return view('backend.update.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.update.create',get_defined_vars());
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
            'title' => 'required|unique:updates|max:200',
            'date' => 'required',
            'description' => 'required|max:800',
            'file' => 'nullable | mimes:jpeg,jpg | dimensions:min_width:200,min_height:200',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $notice = new Update();
        $notice->image = $logo ?? null;
        $notice->date = $request->date;
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->visibility = $request->status;
        $notice->save();
        alert()->success('New Update added.', 'Successfully!');
        return redirect()->route('update.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function show(Update $update)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update = Update::findorFail($id);
        return view('backend.update.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|unique:updates,title,' . $id,
            'description' => 'required|max:800',
            'date' => 'required',
            'file' => 'nullable|image|dimensions:min_width:200,min_height:200',
            
        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $update = new Update();
        $data = [
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $update->where('id', $id)->update($data);
        alert()->success('Update info updated', 'Successfully!');
        return redirect()->route('update.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Update::destroy($id);
        if ($delete)
            alert()->success('update info successfully deleted.', 'Successfully!');
        return redirect()->route('update.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('file')) return null;

        $file = $request->file('file');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path().'/frontant/update/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }

        Image::make($file)
            ->resize(1000, 500)
            ->save($path . $file_name);

        return $file_name;
    }
}
