<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Slider;
use App\models\Mission;
use App\models\History;
use App\models\HistoricalPlace;
use App\models\EminentPeople;

class HomeController extends Controller
{
  function index()
  {



    $slider = Slider::where('visibility', 1)->orderBy('id', 'desc')->take(4)->get();
    $mission = Mission::where('visibility', 1)->orderBy('id', 'desc')->first();
    $history = History::where('visibility', 1)->orderBy('id', 'desc')->first();
    $historyPlace = HistoricalPlace::where('visibility', 1)->orderBy('id', 'desc')->take(6)->get();
    $eminentPleople = EminentPeople::where('visibility', 1)->orderBy('id', 'desc')->take(8)->get();
    return view('frontant/home', get_defined_vars());
  }
}
