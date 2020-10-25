<?php

namespace App\Repositories;
use App\models\Unit;

class UnitRepositories
{
    private $unit;
    public function __construct(Unit $unit)
    {
        $this->unit = $unit;
    }
    public function allUnit($request)
    {
        $query  = $this->unit::orderBy('id', 'desc');
        if ($request->query('search_input')) {
            $search_input = $request->query('search_input');
            $query = $query->where(function ($q) use ($search_input) {
                $q->orWhere('name', 'like', '%' . $search_input . '%')
                    ->orWhere('id', 'like', '%' . $search_input . '%');
            });
        }
        $allUnit = $query->paginate(10);
        $allUnit->appends(request()->query());
        return $allUnit;
    }

    public function storeUnit($request)
    {
        $unit = new $this->unit;
        $unit->name = $request->name;
        $unit->status = $request->status;
        $unit->save();
        return $unit;
    }
    public function updateUnit($request)
    {
      return  $this->unit::where('id', $request->id)->update([
            'name'       => $request->name,
            'status' => $request->status
        ]);
    }

    public function deleteUnit()
    {
    }
}
