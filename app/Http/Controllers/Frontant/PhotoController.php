<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Gallery_category;
use App\models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        // $photo = Photo::paginate(12);
        $photo = Gallery_category::with('photos')->get();

        // echo "<pre>";
        // print_r($photo);
        // die();

        return view('frontant.photo', get_defined_vars());
    }
}
