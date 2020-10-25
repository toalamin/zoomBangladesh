<?php

namespace App\Repositories;

use App\models\Category;

class CategoryRepositories
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function allCategory($request)
    {
        $query  = $this->category::orderBy('id', 'desc');
        if ($request->query('search_input')) {
            $search_input = $request->query('search_input');
            $query = $query->where(function ($q) use ($search_input) {
                $q->orWhere('name', 'like', '%' . $search_input . '%')
                    ->orWhere('id', 'like', '%' . $search_input . '%');
            });
        }
        $allCategory = $query->paginate(10);
        $allCategory->appends(request()->query());
        return $allCategory;
    }

    public function storeCategory($request)
    {
        $categroy = new $this->category;
        $categroy->name = $request->name;
        $categroy->status = $request->status;
        $categroy->save();
        return $categroy;
    }


    public function updateCategory($request)
    {
      return  $this->category::where('id', $request->id)->update([
            'name'       => $request->name,
            'status' => $request->status
        ]);
    }

    public function deleteCategory()
    {
    }
}
