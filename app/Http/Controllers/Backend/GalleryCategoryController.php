<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\Gallery_category;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery_category::all();
        return view('backend.gallery.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
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
            'title' => 'required|unique:gallery_categories|max:200',
           
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
     
        $gallery = new Gallery_category();
        $gallery->title = $request->title;
        $gallery->visibility = $request->status;
        $gallery->save();
        alert()->success('New Gallery Section Added.', 'Successfully!');
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery_category $Gallery_category)
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
        $gallery = Gallery_category::findorFail($id);
        return view('backend.gallery.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|unique:gallery_categories,title,' . $id,
            

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
      
        $gallery = new Gallery_category();
        $data = [
            'title' => $request->title,
            'visibility' => $request->status,
        ];
        $gallery->where('id', $id)->update($data);
        alert()->success('Gallery Updated', 'Successfully!');
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Gallery_category::destroy($id);
        if ($delete)
            alert()->success('Help info successfully deleted.', 'Successfully!');
        return redirect()->route('gallery.index');
    }
}
