<?php

namespace App\Http\Controllers\Backend;


use App\models\Sponsoors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\models\ChildFeatured;
use App\models\SponsoorChild;
use Intervention\Image\Facades\Image;

class SponsoorChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $child = SponsoorChild::all();
        return view('backend.child.index', get_defined_vars());
    }


    public function featuredList()
    {
        $featured = ChildFeatured::get();
        return view('backend.child.featured', get_defined_vars());
    }


    public function featuredEdit($id)
    {
        $featured = ChildFeatured::findorFail($id);
        return view('backend.child.editf', get_defined_vars());
    }



    public function featuredUpdate(Request $request,$id)
    {
        $featured = ChildFeatured::findorFail($id);
        $featured->description = $request->description;
        $featured->save();
        alert()->success('New Featured Updated.', 'Successfully!');
        return redirect()->route('featured.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $category = Sponsoors::all();
        return view('backend.child.create', get_defined_vars());
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
            'description' => 'required|max:200',
            'gender' => 'required|max:200',
            'years' => 'required|max:200',
            'dream' => 'required|max:200',
            'section' => 'required|max:200',
            'hobby' => 'required|max:200',
            'father' => 'required|max:200',
            'mother' => 'required|max:200',
            'district' => 'required|max:200',
            'link' => 'required|max:200',
            'image' => 'required ',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $sponsor = new SponsoorChild();
        $sponsor->image = $logo ?? null;
        $sponsor->description = $request->description;
        $sponsor->name = $request->name;
        $sponsor->gender = $request->gender;
        $sponsor->years = $request->years;
        $sponsor->dream = $request->dream;
        $sponsor->section = $request->section;
        $sponsor->hobby = $request->hobby;
        $sponsor->father = $request->father;
        $sponsor->mother = $request->mother;
        $sponsor->district = $request->district;
        $sponsor->link = $request->link;
        $sponsor->visibility = $request->status;
        $sponsor->save();
        alert()->success('New Child sponsor added.', 'Successfully!');
        return redirect()->route('child.index');
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

        $child = SponsoorChild::findorFail($id);
        return view('backend.child.edit', get_defined_vars());
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
            'name' => 'required|max:200',
            'description' => 'required|max:200',
            'gender' => 'required|max:200',
            'years' => 'required|max:200',
            'dream' => 'required|max:200',
            'section' => 'required|max:200',
            'hobby' => 'required|max:200',
            'father' => 'required|max:200',
            'mother' => 'required|max:200',
            'district' => 'required|max:200',
            'link' => 'required|max:200',
            'image' => 'nullable ',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $sponsor = new SponsoorChild();
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'gender' => $request->gender,
            'years' => $request->years,
            'dream' => $request->dream,
            'section' => $request->section,
            'hobby' => $request->hobby,
            'father' => $request->father,
            'mother' => $request->mother,
            'district' => $request->district,
            'link' => $request->link,
            'image' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $sponsor->where('id', $id)->update($data);
        alert()->success('Child Sponsor Updated', 'Successfully!');
        return redirect()->route('child.index');
    }

    public function destroy($id)
    {
        $delete = SponsoorChild::destroy($id);
        if ($delete)
            alert()->success('Child Sponsor successfully deleted.', 'Successfully!');
        return redirect()->route('child.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('image')) return null;
        $file = $request->file('image');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = base_path() . '/frontant/child/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }

        Image::make($file)
            ->resize(300, 300)
            ->save($path . $file_name);
        return $file_name;
    }
}
