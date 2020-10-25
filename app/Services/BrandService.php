<?php

namespace App\Services;
use App\Repositories\BrandRepositories;

class BrandService 
{

    private $brandRepositories;
    public function __construct(BrandRepositories $bRepositories)
    {
            $this->brandRepositories = $bRepositories;        
    }

    public function getBrandList($request){
       return $this->brandRepositories->allBrand($request);
    }


    public function brandSave($request){
        return $this->brandRepositories->storeBrand($request);
    }
    public function brandUpdate($request){
        return $this->brandRepositories->updateBrand($request);
    }

    //
}
