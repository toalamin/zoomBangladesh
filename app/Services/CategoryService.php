<?php

namespace App\Services;
use App\Repositories\CategoryRepositories;

class CategoryService 
{

    private $categoryRepositories;
    public function __construct(CategoryRepositories $cRepositories)
    {
            $this->categoryRepositories = $cRepositories;        
    }

    public function getCategoryList($request){
       return $this->categoryRepositories->allCategory($request);
    }


    public function categorySave($request){
        return $this->categoryRepositories->storeCategory($request);
    }
    public function categoryUpdate($request){
        return $this->categoryRepositories->updateCategory($request);
    }

    //
}
