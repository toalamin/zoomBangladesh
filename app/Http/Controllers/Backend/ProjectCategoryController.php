<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\models\Project_category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ProjectCategoryController extends Controller
{


    public function index()
    {

        $proejctCategory = Project_category::orderBy('id', 'DESC')->get();
        return view('backend.projectCategory.index', get_defined_vars());
    }


    public function create()
    {
        return view('backend.projectCategory.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:project_categories|max:200',
            'short_description' => 'required',
            'location' => 'required',
            'description' => 'required',
            'raise' => 'required|max:200',
            'success' => 'required|max:200',
            'goal' => 'required|max:200',
            'global' => 'required|max:800',
            'image' => 'required | mimes:jpeg,jpg',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);

        // echo $logo;die("test");

        $project = new Project_category();
        $project->image = $logo;
        $project->location = $request->location;
        $project->title = $request->title;
        $project->short_description = ltrim($request->short_description);
        $project->description = $request->description;
        $project->raise = $request->raise;
        $project->success = $request->success;
        $project->goal = $request->goal;
        $project->global = $request->global;
        $project->visible = $request->status;
        $project->save();
        alert()->success('New Project Category added.', 'Successfully!');
        return redirect()->route('projectCategory.index');
    }

    public function edit($id)
    {
        $editProject = Project_category::findOrFail($id);
        return view('backend.projectCategory.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|unique:project_categories,title,' . $id,
            'short_description' => 'required',
            'location' => 'required',
            'description' => 'required',
            'raise' => 'required|max:200',
            'success' => 'required|max:200',
            'goal' => 'required|max:200',
            'global' => 'required|max:800',
            'image' => 'nullable | mimes:jpeg,jpg,png',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $projectCategory = new Project_category();
        $data = [
            'location' => $request->location,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => ltrim($request->description),
            'raise' => $request->raise,
            'success' => $request->success,
            'goal' => $request->goal,
            'global' => $request->global,
            'image' => $logo ?? $request->old_image,
            'visible' => $request->status,
        ];
        $projectCategory->where('id', $id)->update($data);
        alert()->success('New Project Category added.', 'Successfully!');
        return redirect()->route('projectCategory.index');
    }



    public function destroy(Request $request, $id)
    {
        $delete = Project_category::destroy($id);
        if ($delete)
            alert()->success('Project Category Successfully deleted.', 'Successfully!');
        return redirect()->route('projectCategory.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('image')) return null;

        $file = $request->file('image');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = base_path() . '/frontant/projectCategory/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }
        Image::make($file)
            ->resize(1200, 800)
            ->save($path . $file_name);
        return $file_name;
    }
}
