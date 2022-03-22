<?php

namespace App\Http\Controllers\Api;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Repositories\DepartmentRepository;

class DepartmentController
{
    public function __construct(DepartmentRepository $DepartmentRepository){
        $this->DepartmentRepository = $DepartmentRepository;

    }

    public function index()
    {
        return $this->DepartmentRepository->index();

    }

    public function store(Request $request)
    {
        return $this->DepartmentRepository->store($request);
    }

    public function show($id)
    {
        $department = Department::find($id);
        if(!empty($department))
        {
            return response()->json($department);
        }
        else
        {
            return response()->json([
                "message" => "not found"
            ], 404);
        }

    }

    public function update(Request $request,$id )
    {
        return $this->DepartmentRepository->update($request, $id);

    }

    public function destroy($id)
    {
       return $this->DepartmentRepository->delete($id);
    }

}
