<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $employees = Employee::with('department','salary')->get();
        // $employees = Employee::all();
        return view('Admin.Employees.emlpoyee_list',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = Department::all();

        return view('Admin.Employees.add_employee',compact('employee'));
    }

    public function store(Request $request)
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
        $employee->salary = request('salary');
        $employee->amount = request('amount');
        $employee->join_date = request('join_date');
        $employee->end_date = request('end_date');
        $employee->phone = request('phone');
        $employee->detail = request('detail');
        $employee->gender = request('gender');
        $employee->date_of_birth = request('date_of_birth');
        $employee->photo = $filePath;

        $employee->save();
        return redirect('admin/employee/list')->with('success','Employee has been created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('Admin.Employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('Admin.Employees.edit', compact('employee'));
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
        $filePath = '';
        if($request->file()) {
            $fileName = time().'_'.$request->file('photo')->getClientOriginalName();
            $filePath = $request->file('photo')->storeAs('uploads',$fileName, 'uploads');
        }
        $employee = Employee::find($id);

        $employee->name = request('name');
        $employee->email = request('email');
        $employee->address = request('address');
        $employee->department_id = request('department_id');
        $employee->salary = request('salary');
        $employee->amount = request('amount');
        $employee->join_date = request('join_date');
        $employee->end_date = request('end_date');
        $employee->phone = request('phone');
        $employee->detail = request('detail');
        $employee->gender = request('gender');
        $employee->date_of_birth = request('date_of_birth');

        $employee->photo = $filePath;

        $employee->save();
        return redirect('admin/employee/list')->with('success','Employee has been created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::where('id',$id)->delete();
        return redirect('admin/employee/list')->with('success', 'Delete successfully');
    }
}
