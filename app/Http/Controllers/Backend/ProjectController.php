<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\Project;
use App\models\Project_category;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{

    public function index()
    {

        $project = Project::orderBy('id', 'DESC')->get();
        return view('backend.project.index', get_defined_vars());
    }


    public function create()
    {
        $category = Project_category::all();
        return view('backend.project.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:project_categories|max:200',
            'project_category' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'file' => 'required | mimes:jpeg,jpg',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);

        // echo $logo;die("test");

        $project = new Project();
        $project->image = $logo;
        $project->project_category = $request->project_category;
        $project->title = $request->title;
        $project->short_description = $request->short_description;
        $project->description = $request->description;
        $project->visibile = $request->status;
        $project->save();
        alert()->success('New Project  added.', 'Successfully!');
        return redirect()->route('project.index');
    }

    public function edit($id)
    {
        $category = Project_category::all();
        $project = Project_category::findOrFail($id);
        return view('backend.project.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200|unique:project_categories,title,' . $id,
            'project_category' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'file' => 'nullable | mimes:jpeg,jpg,png',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $project = new Project();
        $data = [
            'project_category' => $request->project_category,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'image' => $logo ?? $request->old_image,
            'visibile' => $request->status,
        ];
        $project->where('id', $id)->update($data);
        alert()->success('New Project  added.', 'Successfully!');
        return redirect()->route('project.index');
    }



    public function destroy(Request $request, $id)
    {
        $delete = Project::destroy($id);
        if ($delete)
            alert()->success('Project Successfully deleted.', 'Successfully!');
        return redirect()->route('project.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('file')) return null;

        $file = $request->file('file');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/frontant/project/';
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
