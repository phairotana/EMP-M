<?php

namespace App\Http\Controllers\Api;

use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;
use App\Http\Resources\EmployeeResource;

class EmployeeController
{

    public function index()
    {
        $newQuery = (new Employee)->newQuery();
        if(!empty(request()->name))
        {
            $newQuery->where('name', 'LIKE', '%' . request()->name . '%');
        }
        $data = $newQuery->paginate(5);
        return EmployeeResource::collection($data);
    }

    public function store(EmployeeRequest $request)
    {
        $filePath = '';
        if($request->file()) {
            $fileName = time().'_'.$request->file('photo')->getClientOriginalName();
            $filePath = $request->file('photo')->storeAs('uploads', $fileName, 'uploads');
        }

        $employee = new Employee();

        $employee->name = request('name');
        $employee->email = request('email');
        $employee->address = request('address');
        $employee->department_id = request('department_id');
        $employee->salary_id = request('salary_id');
        $employee->amount = request('amount');
        $employee->join_date = request('join_date');
        $employee->end_date = request('end_date');
        $employee->phone = request('phone');
        $employee->detail = request('detail');
        $employee->gender = request('gender');
        $employee->date_of_birth = request('date_of_birth');
        $employee->photo = $filePath;

        $employee->save();
        return response()->json(["message" => "success','Employee has been created successfully."]);
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        if(!empty($employee))
        {
            return response()->json($employee);
        }
        else
        {
            return response()->json([
                "message" => "not found"
            ], 404);
        }
    }

    public function update(EmployeeRequest $request, $id)
    {
        $filePath = '';
        if($request->file()) {
            $fileName = time().'_'.$request->file('photo')->getClientOriginalName();
            $filePath = $request->file('photo')->storeAs('uploads',$fileName, 'uploads');
        }else{
            // $fileName = $request->old_photo;
            $fileName = 'sdafdas';
        }

        $employee = Employee::find($id);

        $employee->name = request('name');
        $employee->email = request('email');
        $employee->address = request('address');
        $employee->department_id = request('department_id');
        $employee->salary_id= request('salary_id');
        $employee->amount = request('amount');
        $employee->join_date = request('join_date');
        $employee->end_date = request('end_date');
        $employee->phone = request('phone');
        $employee->detail = request('detail');
        $employee->gender = request('gender');
        $employee->date_of_birth = request('date_of_birth');

        $employee->photo = $filePath;

        $employee->save();
        return response()->json(["message" => "success','Employee has been created successfully."]);
    }

    public function destroy($id)
    {
        Employee::find($id)->delete();
       return response()->json(["message" => "Update successful"]);

    }
}
