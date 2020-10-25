<?php

namespace App\Services;

use App\Repositories\ProductRepositories;
use App\Rules\VendorPhoneValidationRules;

class ProductService
{

    private $productRepositories;
    public function __construct(ProductRepositories $pRepositories)
    {
        $this->productRepositories = $pRepositories;
    }

    public function getTotalProduct()
    {
        return $this->productRepositories->getTotalProduct();
    }

    public function getProductList($request)
    {
        return $this->productRepositories->allProduct($request);
    }

    public function getCategoryList()
    {
        return $this->productRepositories->allCategory();
    }

    public function getUnitList()
    {
        return $this->productRepositories->allUnit();
    }

    public function getBrandList()
    {
        return $this->productRepositories->allBrand();
    }


    public function productSave($request)
    {
        return $this->productRepositories->storeProduct($request);
    }
    public function productUpdate($request)
    {
        return $this->productRepositories->updateProduct($request);
    }

    public function productStoreValidationRules($request)
    {
        return [
            'productid'             => 'required|unique:products,productid|max:15',
            'category_id'           => 'required',
            'brand_id'              => 'required|unique:products,brand_id',
            'unit_id'               => 'required|unique:products,unit_id',
            'name'                  => 'required|max:50',
            'purchases_price'       => 'required|numeric|max:10',
            'sales_price'           => 'required|numeric|max:10',

        ];
    }

    public function productUpdateValidationRules($id)
    {
        return [
            'vendorid'            => 'required|max:80|unique:vendors,vendorid,' . $id,
            'name'                => 'required|max:120|unique:vendors,name,' . $id,
            'email'               => 'required|email|unique:vendors,email,' . $id,
            'phone'               => ['required', 'unique:vendors,phone,' . $id, 'regex:/(^(01))[3-9]{1}(\d){8}$/'],
            'address'            => 'required|max:120',
            'status'            => 'required|numeric',

        ];
    }


    //
}
