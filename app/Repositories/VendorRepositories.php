<?php

namespace App\Repositories;

use App\models\Vendor;

class VendorRepositories
{
    private $vendor;
    public function __construct(Vendor $vendor)
    {
        $this->vendor = $vendor;
    }
    public function allVendor($request)
    {
        $query  = $this->vendor::orderBy('id', 'desc');
        if ($request->query('search_input')) {
            $search_input = $request->query('search_input');
            $query = $query->where(function ($q) use ($search_input) {
                $q->orWhere('name', 'like', '%' . $search_input . '%')
                    ->orWhere('id', 'like', '%' . $search_input . '%')
                    ->orWhere('email', 'like', '%' . $search_input . '%')
                    ->orWhere('phone', 'like', '%' . $search_input . '%')
                    ->orWhere('vendorid', 'like', '%' . $search_input . '%');
            });
        }
        $allVendor = $query->paginate(10);
        $allVendor->appends(request()->query());
        return $allVendor;
    }

    public function storeVendor($request)
    {
        $vendor = new $this->vendor;
        $vendor->branch_id = rand(1, 5);
        $vendor->vendorid = $request->vendorid;
        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->address = $request->address;
        $vendor->credit_limit = $request->credit_limit;
        $vendor->status = $request->status;
        $vendor->save();
        return $vendor;
    }
    public function updateVendor($request)
    {
        return  $this->vendor::where('id', $request->id)->update([
            'branch_id'       => rand(1, 5),
            'vendorid'       => $request->vendorid,
            'name'       => $request->name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'address'       => $request->address,
            'credit_limit'       => $request->credit_limit,
            'status' => $request->status
        ]);
    }

    public function deleteVendor()
    {
    }
}
