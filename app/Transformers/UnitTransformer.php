<?php

namespace App\Transformers;

//use const Sodium\CRYPTO_AEAD_CHACHA20POLY1305_ABYTES;

class UnitTransformer
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
    public function unitSaved()
    {
        return ResponseTransformer::successResponse(201, 'Unit Created', 'Unit Created');
    }
    /**
     * @param $units
     * @return array
     */
    public function units($units)
    {
        return ResponseTransformer::successResponse(200, 'Units', ['units' => $units]);
    }
    /**
     * @return array
     */
    public function unitUpdated()
    {
        return ResponseTransformer::successResponse(204, 'Unit Updated', 'Unit Updated');
    }
}