<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Slider;
use App\models\Mission;
use App\models\History;
use App\models\HowCanHelp;
use App\models\MonthlyEmployee;
use App\Models\PeopleSay;
use App\Models\Project_category;
use App\Models\Sponsoors;

class HomeController extends Controller
{
  function index()
  {
    $slider = Slider::where('visibility', 1)->get();
    $misson = Mission::first();
    $sponsor = Sponsoors::where('visibility', 1)->get();
    $people = PeopleSay::where('visibility', 1)->get();
    



    $help = HowCanHelp::where('visibility', 1)->get();
    $projectCategory = Project_category::where('visible', 1)->get();
    $complteteProject = Project_category::where('visible', 2)->get();
    $monthlyEmployee = MonthlyEmployee::with('team')->where('type',1)->where('visibility', 1)->get();
    $yearlyEmployee = MonthlyEmployee::with('team')->where('type',2)->where('visibility', 1)->get();

    
    return view('frontant/home', get_defined_vars());
  }
}
