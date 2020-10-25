<?php

namespace App\Http\Controllers\Frontant;

use App\Http\Controllers\Controller;
use App\models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
   public function index()
   {
      $notice = Notice::paginate(10);
      return view('frontant.notice',get_defined_vars());
   }
}
