<?php

namespace App\Repositories;

use App\models\Product;
use App\models\Brand;
use App\models\Category;
use App\models\Unit;

class ProductRepositories
{
    private $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }


    public function getTotalProduct()
    {
        $allProduct = Product::count();
        return $allProduct;
    }
    public function allCategory()
    {
        $allCategory = Category::where('status', 1)->get();
        return $allCategory;
    }

    public function allBrand()
    {
        $allBrand = Brand::where('status', 1)->get();
        return $allBrand;
    }

    public function allUnit()
    {
        $allUnit = Unit::where('status', 1)->get();
        return $allUnit;
    }


    public function allProduct($request)
    {
        $query  = $this->product::orderBy('id', 'desc');
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
        $allProduct = $query->paginate(10);
        $allProduct->appends(request()->query());
        return $allProduct;
    }

    public function storeProduct($request)
    {
        $product = new $this->product;
        $product->branch_id = rand(1, 5);
        $product->vendorid = $request->vendorid;
        $product->name = $request->name;
        $product->email = $request->email;
        $product->phone = $request->phone;
        $product->address = $request->address;
        $product->credit_limit = $request->credit_limit;
        $product->status = $request->status;
        $product->save();
        return $product;
    }
    public function updateProduct($request)
    {
        return  $this->product::where('id', $request->id)->update([
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

    public function deleteProduct()
    {
    }
}
