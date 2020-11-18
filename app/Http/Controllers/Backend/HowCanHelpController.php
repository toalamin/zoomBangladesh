<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\HowCanHelp;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class HowCanHelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice = HowCanHelp::all();
        return view('backend.help.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.help.create');
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
            'title' => 'required|unique:how_can_helps|max:200',
            'description' => 'required|max:1200',
            'link' => 'nullable',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
     
        $notice = new HowCanHelp();
        $notice->link = $request->link;
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->visibility = $request->status;
        $notice->save();
        alert()->success('New Help Section Added.', 'Successfully!');
        return redirect()->route('help.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(HowCanHelp $howCanHelp)
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
        $help = HowCanHelp::findorFail($id);
        return view('backend.help.edit', get_defined_vars());
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
            'title' => 'required|max:200|unique:how_can_helps,title,' . $id,
            'description' => 'required|max:1200',
            'link' => 'nullable',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
      
        $help = new HowCanHelp();
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'visibility' => $request->status,
        ];
        $help->where('id', $id)->update($data);
        alert()->success('Help Updated', 'Successfully!');
        return redirect()->route('help.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = HowCanHelp::destroy($id);
        if ($delete)
            alert()->success('Help info successfully deleted.', 'Successfully!');
        return redirect()->route('help.index');
    }

    
}
