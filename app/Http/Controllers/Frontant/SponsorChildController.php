<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\ChildFeatured;
use App\models\Committee;
use App\Models\Project_category;
use App\models\SponsoorChild;
use Illuminate\Http\Request;

class SponsorChildController extends Controller
{
    public function index()
    {
        $project =  Project_category::orderBy('id', 'desc')->paginate(10);
        $child = SponsoorChild::where('visibility', 1)->get();
        $featured = ChildFeatured::first();


        $slideItem = [];
        $temarray = [];
        $sl = 1;
        foreach ($child as $key => $value) :
            $data['name'] = $value->name;
            $data['description'] = $value->description;
            $data['gender'] = $value->gender;
            $data['years'] = $value->years;
            $data['dream'] = $value->dream;
            $data['section'] = $value->section;
            $data['hobby'] = $value->hobby;
            $data['father'] = $value->father;
            $data['mother'] = $value->mother;
            $data['district'] = $value->district;
            $data['image'] = $value->image;
            $data['link'] = $value->link;
            $temarray[] = $data;
            if ($sl == 3) :
                $slideItem[] = $temarray;
                $sl = 0;
                unset($temarray);
            endif;
            $sl+=1;
        endforeach;


        return view('frontant.sponsorachild', get_defined_vars());
    }
}
