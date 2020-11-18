<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Committee;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqEnglish = Faq::where('type', 1)->get();
        $faqBangla = Faq::where('type', 2)->get();
        return view('frontant.faq', get_defined_vars());
    }
}
