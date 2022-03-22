<?php
namespace App\Repositories;

use App\Models\Department;
use App\Repositories\RepositoryInterface;
use App\Http\Resources\DepartmentResource;

class DepartmentRepository implements RepositoryInterface{

    public function index()
    {
        $newQuery = (new Department)->newQuery();
        if(!empty(request()->title))
        {
            $newQuery->where('title', 'LIKE', '%' . request()->title . '%');
        }
        $data = $newQuery->paginate(5);
        return DepartmentResource::collection($data);

    }
    public function delete($id)
    {
        Department::find($id)->delete();
        return response()->json(["message" => "Update successful"]);
    }
    public function store($request)
    {
        $department = new Department;
        $department->title = $this->convertTitle($request->title);
        $department->detail = $request->detail;
        $department->save();

        return response()->json(["message" => "Create successful"]);
    }
    public function update($request, $id)
    {
        $department = $request->all();
        Department::where('id',$id)->update($department);
        return response()->json(["message" => "Update successful"]);
    }
    public function convertTitle($title)
    {
        // $title = strtolower($title);
        return 0;
    }

}
