<?php

namespace App\Transformers;

//use const Sodium\CRYPTO_AEAD_CHACHA20POLY1305_ABYTES;

class CategoryTransformer
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
    public function categorySaved()
    {
        return ResponseTransformer::successResponse(201, 'Category Created', 'Category Created');
    }

    /**
     * @param $categories
     * @return array
     */
    public function categories($categories)
    {
        return ResponseTransformer::successResponse(200, 'Categories', ['categories' => $categories]);
    }

    /**
     * @return array
     */
    public function categoryUpdated()
    {
        return ResponseTransformer::successResponse(204, 'Category Updated', 'Category Updated');
    }
}