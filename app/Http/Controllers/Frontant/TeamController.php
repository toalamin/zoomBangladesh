<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Committee;
use App\models\Team;
use App\Models\Team_category;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        
        $categoryWiseTeam = Team_category::with('teams')->get();

        return view('frontant.team', get_defined_vars());
    }
}
