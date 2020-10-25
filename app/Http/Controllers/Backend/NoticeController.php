<?php

namespace App\Http\Controllers\Backend;

use App\models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice = Notice::all();
        return view('backend.notice.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.notice.create');
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
            'title' => 'required|unique:notices|max:200',
            'description' => 'required|max:1200',
            'file' => 'nullable | mimes:jpeg,jpg | dimensions:min_width:200,min_height:200',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $notice = new Notice();
        $notice->image = $logo ?? null;
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->visibility = $request->status;
        $notice->save();
        alert()->success('New notice added.', 'Successfully!');
        return redirect()->route('notice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::findorFail($id);
        return view('backend.notice.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|unique:notices,title,' . $id,
            'description' => 'required|max:1200',
            'file' => 'nullable|image|dimensions:min_width:200,min_height:200',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $notice = new Notice();
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $notice->where('id', $id)->update($data);
        alert()->success('Notice Updated', 'Successfully!');
        return redirect()->route('notice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Notice::destroy($id);
        if ($delete)
            alert()->success('Notice info successfully deleted.', 'Successfully!');
        return redirect()->route('notice.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('file')) return null;

        $file = $request->file('file');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = base_path('/uploads/notice/');
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
