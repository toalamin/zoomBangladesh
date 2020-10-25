<?php
namespace App\Http\Controllers\Frontant;
use App\Http\Controllers\Controller;
use App\models\Update;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index()
    {
        $update = Update::paginate(5);
        return view('frontant.update',get_defined_vars());
    }
}
