<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\Committee;
use App\models\Member;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CommitteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $committe = Committee::with('member')->where('type', 1)->get();
        return view('backend.executive.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = Member::where('visibility', 1)->get();
        return view('backend.executive..create', get_defined_vars());
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
            "member_id"  => "required",
            'duration' => 'required|max:100',
            'designation' => 'required|max:20',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $allMember = $request->member_id;
        foreach ($allMember as $key => $value) :
            $committe = new Committee();
            $committe->type = 1; //executive committe.
            $committe->member_id = $value;
            $committe->designation = $request->designation;
            $committe->duration = $request->duration;
            $committe->visibility = 1;
            $committe->save();
        endforeach;
        alert()->success('New member added.', 'Successfully!');
        return redirect()->route('executive.committee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $committe = Committee::findorFail($id);
        $member = Member::where('visibility', 1)->get();
        return view('backend.executive.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "member_id"  => "required",
            'duration' => 'required|max:100',
            'designation' => 'required|max:20',
        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $committe = Committee::findorFail($id);
        $committe->type = 1; //executive committe.
        $committe->member_id = $request->member_id;
        $committe->designation = $request->designation;
        $committe->duration = $request->duration;
        $committe->visibility = 1;
        $committe->save();
        alert()->success('Executive Committe Update Successfully.', 'Successfully!');
        return redirect()->route('executive.committee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Committee::destroy($id);
        if ($delete)
            alert()->success('Executive Committe Successfully deleted.', 'Successfully!');
        return redirect()->route('executive.committee.index');
    }
}
