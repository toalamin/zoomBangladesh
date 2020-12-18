<?php

namespace App\Http\Controllers\Backend;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('backend.user.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.create', get_defined_vars());
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
            'name' => 'required|max:200',
            'email' => 'required|email|unique:users|max:55',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'address' => 'required|max:100',
            'password' => 'required|min:6',

        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->user_type = $request->user_type;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->save();
        alert()->success('New User added.', 'Successfully!');
        return redirect()->route('user.index');
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
        $user = User::findorFail($id);
       
        if (!$user):
        alert()->warning('User Not Found', 'Error');
        return redirect()->back();
        endif;
        return view('backend.user.edit', get_defined_vars());
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
            'name' => 'required|max:200',
            'email' => 'required|email|max:55|unique:users,email,'.$id,
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'address' => 'required|max:100',
            'password' => 'nullable|min:6',

        ]);
           


        if ($validator->fails()) :
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        endif;

        $user = User::find($id);
        $user->user_type = $request->user_type;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->visibility = $request->status;
        if ($request->password):
            $user->password = bcrypt($request->password);
        endif;
        $user->save();
        alert()->success('New User Update.', 'Successfully!');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::destroy($id);
        if ($delete)
            alert()->success('User info successfully deleted.', 'Successfully!');
        return redirect()->route('user.index');
    }
}
