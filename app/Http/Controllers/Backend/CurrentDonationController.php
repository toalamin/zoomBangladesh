<?php
namespace App\Http\Controllers\Backend;
use App\models\CurrentDonation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\models\Donate;
use Intervention\Image\Facades\Image;

class CurrentDonationController extends Controller
{
    public function index()
    {
        $currentDonation = CurrentDonation::orderBy('id', 'DESC')->get();
        return view('backend.currentDonation.index', get_defined_vars());
    }
    
    public function donationList()
    {
        $currentDonation = CurrentDonation::orderBy('id', 'DESC')->get();
        $donate = Donate::all();
        return view('backend.currentDonation.list', get_defined_vars());
    }


    public function create()
    {
        return view('backend.current.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'raised' => 'required|max:200',
            'goal' => 'required',
            'success' => 'required',
            'description' => 'required',
            'image' => 'required | mimes:jpeg,jpg',
        ]);

        if ($validator->fails()) {
            alert()->warning('Validation Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);

        // echo $logo;die("test");

        $currentDonation = new CurrentDonation();
        $currentDonation->image = $logo;
        $currentDonation->raised = $request->raised;
        $currentDonation->success = $request->success;
        $currentDonation->goal = $request->goal;
        $currentDonation->description = $request->description;
        $currentDonation->visibility = $request->status;
        $currentDonation->save();
        alert()->success('Current Donation added.', 'Successfully!');
        return redirect()->route('current.index');
    }

    public function edit($id)
    {
        $currentDonation = CurrentDonation::findOrFail($id);
        return view('backend.currentDonation.edit', get_defined_vars());
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'raised' => 'required|max:200',
            'goal' => 'required',
            'success' => 'required',
            'description' => 'required',
            'image' => 'nullable | mimes:jpeg,jpg',

        ]);
        if ($validator->fails()) {
            alert()->warning('Validation Error3', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logo = $this->uploadSliderImage($request);
        $currentDonation = new CurrentDonation();
        $data = [
            'raised' => $request->raised,
            'goal' => $request->goal,
            'success' => $request->success,
            'description' => $request->description,
            'image' => $logo ?? $request->old_image,
            'visibility' => $request->status,
        ];
        $currentDonation->where('id', $id)->update($data);
        alert()->success('Current Donation added.', 'Successfully!');
        return redirect()->route('current.index');
    }



    public function destroy(Request $request, $id)
    {
        $delete = CurrentDonation::destroy($id);
        if ($delete)
            alert()->success('Current Donation Successfully deleted.', 'Successfully!');
        return redirect()->route('current.index');
    }

    private function uploadSliderImage($request)
    {
        if (!$request->hasFile('image')) return null;
        $file = $request->file('image');
        $file_name = microtime() . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/frontant/currentDonation/';
        //Check if the directory already exists.
        if (!is_dir($path)) {
            //Directory does not exist, so lets create it.
            mkdir($path, 0755, true);
        }
        Image::make($file)
            ->resize(500, 300)
            ->save($path . $file_name);
        return $file_name;
    }
}
