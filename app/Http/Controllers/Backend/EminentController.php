<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\EminentPeople;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class EminentController extends Controller
{
    public function index()
    {
        $eminentPeople = EminentPeople::orderBy('id', 'DESC')->get();
        return view('backend.eminent.index', get_defined_vars());
    }
    public function create()
    {
        return view('backend.eminent.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|unique:eminent_people,email_address|max:100',
            'phone' => 'required|unique:eminent_people|max:100',
            'designation' => 'nullable|max:100',
            'short_description' => 'required|max:200',
            'fb_link' => 'required|unique:eminent_people|max:200',
            'linkedin' => 'nullable|unique.eminent_people|max:200',
            'instagram' => 'nullable|unique.eminent_people|max:200',
            'file' => 'required | mimes:jpeg,jpg | dimensions:min_width:200,min_height:200',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $eminentPeople = new EminentPeople();
        $eminentPeople->image = $logo;
        $eminentPeople->name = $request->name;
        $eminentPeople->email = $request->email;
        $eminentPeople->phone = $request->phone;
        $eminentPeople->designation = $request->designation;
        $eminentPeople->short_description = $request->short_description;
        $eminentPeople->fb_link = $request->fb_link;
        $eminentPeople->linkedin = $request->linkedin ?? null;
        $eminentPeople->instagram = $request->instagram ?? null;
        $eminentPeople->visibility = $request->status;
        $eminentPeople->save();
        alert()->success('New eminent people added.', 'Successfully!');
        return redirect()->route('eminent.people.index');
    }

    public function edit($id)
    {
        $eminentPeople = EminentPeople::findOrFail($id);
        return view('backend.eminent.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [

                'name' => 'required|max:200',
                'email' => 'required|max:200|unique:eminent_people,email,' . $id,
                'phone' => 'required|max:200|unique:eminent_people,phone,' . $id,
                'designation' => 'nullable|max:100',
                'short_description' => 'required|max:400',
                'fb_link' => 'required|max:200|unique:eminent_people,fb_link,' . $id,
                'linkedin' => 'nullable|max:200|unique:eminent_people,linkedin,' . $id,
                'instagram' => 'nullable|max:200|unique:eminent_people,instagram,' . $id,
                'file' => 'nullable | mimes:jpeg,jpg | dimensions:min_width:200,min_height:200',
           
        ]);
        
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        //if($logo)
        // unlink('uploads/eminent/'.$request->old_image);

        $eminent = new EminentPeople();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'designation' => $request->designation,
            'short_description' => $request->short_description,
            'fb_link' => $request->fb_link,
            'linkedin' => $request->linkedin ?? null,
            'instagram' => $request->instagram ?? null,
            'image' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $eminent->where('id', $id)->update($data);
        alert()->success('Eminent people Updated', 'Successfully!');
        return redirect()->route('eminent.people.index');
    }



    public function destroy(Request $request, $id)
    {
        $delete = EminentPeople::destroy($id);
        if ($delete)
            alert()->success('Eminent People Successfully deleted.', 'Successfully!');
        return redirect()->route('eminent.people.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('file')) return null;

        $file = $request->file('file');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = base_path('/uploads/eminent/');
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
