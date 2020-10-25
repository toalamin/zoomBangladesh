<?php

namespace App\Repositories;
use App\models\Brand;

class BrandRepositories
{
    private $brand;
    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }
    public function allBrand($request)
    {
        $query  = $this->brand::orderBy('id', 'desc');
        if ($request->query('search_input')) {
            $search_input = $request->query('search_input');
            $query = $query->where(function ($q) use ($search_input) {
                $q->orWhere('name', 'like', '%' . $search_input . '%')
                    ->orWhere('id', 'like', '%' . $search_input . '%');
            });
        }
        $allBrand = $query->paginate(10);
        $allBrand->appends(request()->query());
        return $allBrand;
    }

    public function storeBrand($request)
    {
        $brand = new $this->brand;
        $brand->name = $request->name;
        $brand->status = $request->status;
        $brand->save();
        return $brand;
    }
    public function updateBrand($request)
    {
      return  $this->brand::where('id', $request->id)->update([
            'name'       => $request->name,
            'status' => $request->status
        ]);
    }

    public function deleteBrand()
    {
    }
}
