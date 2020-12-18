<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\MonthlyEmployee;
use App\models\Team;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class MonthlyEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monthly = MonthlyEmployee::with('team')->get();

        



        return view('backend.monthly.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee =  Team::get();
        // echo "<pre>";
        // print_r($employee);
        // die();
        return view('backend.monthly.create',get_defined_vars());
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
            'type' => 'required|max:200',
            'employee_id' => 'required|max:200',
            'description' => 'required|max:1200',

        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $notice = new MonthlyEmployee();
        $notice->type = $request->type;
        $notice->employee_id = $request->employee_id;
        $notice->description = $request->description;
        $notice->visibility = $request->status;
        $notice->save();
        alert()->success('Monthly Employee Added.', 'Successfully!');
        return redirect()->route('monthly.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(MonthlyEmployee $monthlyEmployee)
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
        $monthly = MonthlyEmployee::findorFail($id);
        $employee =  Team::get();
        return view('backend.monthly.edit', get_defined_vars());
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
            'type' => 'required',
            'employee_id' => 'required',
            'description' => 'required|max:1200',
        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $monthly = new MonthlyEmployee();
        $data = [
            'type' => $request->type,
            'employee_id' => $request->employee_id,
            'description' => $request->description,
            'visibility' => $request->status,
        ];
        $monthly->where('id', $id)->update($data);
        alert()->success('Monthly Employee Updated', 'Successfully!');
        return redirect()->route('monthly.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = MonthlyEmployee::destroy($id);
        if ($delete)
            alert()->success('Monthly Employee successfully deleted.', 'Successfully!');
        return redirect()->route('monthly.index');
    }
}
