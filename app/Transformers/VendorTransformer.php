<?php

namespace App\Transformers;

//use const Sodium\CRYPTO_AEAD_CHACHA20POLY1305_ABYTES;

class VendorTransformer
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
    public function vendorSaved()
    {
        return ResponseTransformer::successResponse(201, 'Vendor Created', 'Vendor Created');
    }
    /**
     * @param $vendors
     * @return array
     */
    public function vendors($vendors)
    {
        return ResponseTransformer::successResponse(200, 'Vendors', ['vendors' => $vendors]);
    }
    /**
     * @return array
     */
    public function vendorUpdated()
    {
        return ResponseTransformer::successResponse(204, 'Vendor Updated', 'Vendor Updated');
    }
}