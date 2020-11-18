<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Committee;
use App\Models\Project_category;
use App\models\Team;
use App\Models\Team_category;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $project =  Project_category::orderBy('id','desc')->paginate(10);
        return view('frontant.projectCategory', get_defined_vars());
    }
}
