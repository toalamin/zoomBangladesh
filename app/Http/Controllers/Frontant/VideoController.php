<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Video;

class VideoController extends Controller
{

    public function index()
    {
        $video = Video::paginate(12);
        return view('frontant.video',get_defined_vars());
    }
}
