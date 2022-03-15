<?php

namespace App\Http\Controllers\Api;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::paginate(5);
        return response()->json($departments);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department;
        $department->title = $request->title;
        $department->detail = $request->detail;
        $department->save();

        return response()->json(["message" => "Create successful"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $department = $request->all();
        Department::where('id',$id)->update($department);
        return response()->json(["message" => "Update successful"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $department = $request->all();
        Department::find($id)->delete();
        return response()->json(["message" => "Update successful"]);
    }
    public function search()
    {
        $newQuery = (new Department)->newQuery();
        $newQuery->where('title', 'LIKE', '%' . request()->title . '%');
        $data = $newQuery->paginate(5);
        return response()->json($data);
    }
}
