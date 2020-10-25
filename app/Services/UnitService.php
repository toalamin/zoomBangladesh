<?php

namespace App\Services;
use App\Repositories\UnitRepositories;

class UnitService 
{

    private $unitRepositories;
    public function __construct(UnitRepositories $uRepositories)
    {
            $this->unitRepositories = $uRepositories;        
    }

    public function getUnitList($request){
       return $this->unitRepositories->allUnit($request);
    }


    public function unitSave($request){
        return $this->unitRepositories->storeUnit($request);
    }
    public function unitUpdate($request){
        return $this->unitRepositories->updateUnit($request);
    }

    //
}
