<?php

namespace App\Http\Controllers\Backend;

use App\models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = Video::all();
        return view('backend.videos.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.videos.create',get_defined_vars());
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
            'title' => 'required|unique:videos|max:200',
            'link' => 'required|max:800',
           
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $video = new Video();
        $video->link = $request->link;
        $video->title = $request->title;
        $video->visibility = $request->status;
        $video->save();
        alert()->success('New video added.', 'Successfully!');
        return redirect()->route('video.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::findorFail($id);
        return view('backend.videos.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|unique:videos,title,' . $id,
            'link' => 'required|max:800',
        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
      
        $video = new Video();
        $data = [
            'title' => $request->title,
            'link' =>  $request->link,
            'visibility' => $request->status,
        ];
        $video->where('id', $id)->update($data);
        alert()->success('Video info Updated', 'Successfully!');
        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Video::destroy($id);
        if ($delete)
            alert()->success('Video info successfully deleted.', 'Successfully!');
        return redirect()->route('video.index');
    }
}
