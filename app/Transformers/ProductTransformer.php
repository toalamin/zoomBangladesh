<?php

namespace App\Transformers;

//use const Sodium\CRYPTO_AEAD_CHACHA20POLY1305_ABYTES;

class ProductTransformer
{
    /**
     * @param $e
     * @return array
     */
    public function validationFailed($e)
    {
        $errMsg = '';
        foreach ($e->errors() as $key => $value) {
            $errMsg .= $value[0] . ' ';
        }
        return ResponseTransformer::errorResponse(422, 'Validation Failed. ' . $errMsg, $e->errors());
    }
    /**
     * @return array
     */
    public function productSaved()
    {
        return ResponseTransformer::successResponse(201, 'Product Created', 'Product Created');
    }
    /**
     * @param $product
     * @return array
     */
    public function products($products)
    {
        return ResponseTransformer::successResponse(200, 'Products', ['products' => $products]);
    }
    /**
     * @param $category
     * @return array
     */
    public function categorys($category)
    {
        return ResponseTransformer::successResponse(200, 'Cateogrys', ['categorys' => $category]);
    }
    /**
     * @param $brand
     * @return array
     */
    public function brands($brand)
    {
        return ResponseTransformer::successResponse(200, 'Brands', ['brands' => $brand]);
    }
    /**
     * @param $unit
     * @return array
     */
    public function units($unit)
    {
        return ResponseTransformer::successResponse(200, 'Units', ['units' => $unit]);
    }
    
    /**
     * @param $unit
     * @return array
     */
    public function productid($productid)
    {
        return ResponseTransformer::successResponse(200, 'Product id', ['productid' => $productid]);
    }
    /**
     * @return array
     */
    public function productUpdated()
    {
        return ResponseTransformer::successResponse(204, 'Product Updated', 'Product Updated');
    }
}