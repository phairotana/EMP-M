<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SalaryResource;
use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController
{
    public function index()
    {
        $newQuery = (new Salary())->newQuery();
        if(!empty(request()->salary))
        {
            $newQuery->where('salary', 'LIKE', '%' . request()->salary . '%');
        }
        $data = $newQuery->paginate(5);
        return SalaryResource::collection($data);
    }
    public function store(Request $request)
    {
        $salary = new Salary();
        $salary->salary = $request->salary;
        $salary->save();

        return response()->json(["message" => "Create successful"]);
    }

    public function show($id)
    {
        $salary = Salary::find($id);
        if(!empty($salary))
        {
            return response()->json($salary);
        }
        else
        {
            return response()->json([
                "message" => "not found"
            ], 404);
        }
    }
    public function update(Request $request, $id)
    {
        $salary = $request->all();
        Salary::where('id',$id)->update($salary);
        return response()->json(["message" => "Update successful"]);

    }
    public function destroy($id)
    {
       Salary::find($id)->delete();
       return response()->json(["message" => "Update successful"]);

    }
}
