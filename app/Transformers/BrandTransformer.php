<?php

namespace App\Transformers;

//use const Sodium\CRYPTO_AEAD_CHACHA20POLY1305_ABYTES;

class BrandTransformer
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
    public function brandSaved()
    {
        return ResponseTransformer::successResponse(201, 'Brand Created', 'Brand Created');
    }
    /**
     * @param $brands
     * @return array
     */
    public function brands($brands)
    {
        return ResponseTransformer::successResponse(200, 'Brands', ['brands' => $brands]);
    }
    /**
     * @return array
     */
    public function brandUpdated()
    {
        return ResponseTransformer::successResponse(204, 'Brand Updated', 'Brand Updated');
    }
}