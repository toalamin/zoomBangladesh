<?php

namespace App\Services;

use App\Repositories\VendorRepositories;
use App\Rules\VendorPhoneValidationRules;

class VendorService
{

    private $vendorRepositories;
    public function __construct(VendorRepositories $vRepositories)
    {
        $this->vendorRepositories = $vRepositories;
    }

    public function getVendorList($request)
    {
        return $this->vendorRepositories->allVendor($request);
    }

    public function vendorSave($request)
    {
        return $this->vendorRepositories->storeVendor($request);
    }
    public function vendorUpdate($request)
    {
        return $this->vendorRepositories->updateVendor($request);
    }

    public function vendorStoreValidationRules($request)
    {
        return [
            'vendorid'            => 'required|unique:vendors,vendorid|max:80',
            'name'                => 'required|unique:vendors,name|max:120',
            'email'               => 'required|email|unique:vendors,email',
            'phone'               => ['required', 'unique:vendors,phone', 'regex:/(^(01))[3-9]{1}(\d){8}$/', new VendorPhoneValidationRules($request)],
            'address'            => 'required|max:120',

        ];
    }

    public function vendorUpdateValidationRules($id)
    {
        return [
            'vendorid'            => 'required|max:80|unique:vendors,vendorid,' . $id,
            'name'                => 'required|max:120|unique:vendors,name,'.$id,
            'email'               => 'required|email|unique:vendors,email,' . $id,
            'phone'               => ['required', 'unique:vendors,phone,' . $id, 'regex:/(^(01))[3-9]{1}(\d){8}$/'],
            'address'            => 'required|max:120',
            'status'            => 'required|numeric',

        ];
    }


    //
}
