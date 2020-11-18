<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\Faq;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faq::all();
        return view('backend.faq.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.faq.create');
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
            'question' => 'required|unique:faqs|max:200',
            'answer' => 'required',


        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $faq = new Faq();
        $faq->type = $request->type;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->visibility = $request->status;
        $faq->save();
        alert()->success('New FAQ Added.', 'Successfully!');
        return redirect()->route('faq.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $faq = Faq::findorFail($id);
        return view('backend.faq.edit', get_defined_vars());
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
            'question' => 'required|max:200|unique:faqs,question,' . $id,
            'type' => 'required|max:200',
            'answer' => 'required',


        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $faq = new Faq();
        $data = [
            'answer' => $request->answer,
            'question' => $request->question,
            'type' => $request->type,
            'visibility' => $request->status,
        ];
        $faq->where('id', $id)->update($data);
        alert()->success('FAQ  Updated', 'Successfully!');
        return redirect()->route('faq.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Faq::destroy($id);
        if ($delete)
            alert()->success('Faq successfully deleted.', 'Successfully!');
        return redirect()->route('faq.index');
    }
}
