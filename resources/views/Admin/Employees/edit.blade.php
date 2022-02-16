@extends('layouts.blank')
@section('content')
    <div class="col-md-12">

        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Add Employee
            </div>
            <div class="card-body ">
                <form action="update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-6 ">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="name" name="name"
                                value="{{ $employee->name }}">
                        </div>
                        <div class="col-md-6 ">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="email" name="email"
                                value="{{ $employee->email }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6 ">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="address" name="address"
                                value="{{ $employee->address }}">
                        </div>
                        <div class="col-md-6 ">
                            <label class="form-label">Department</label>
                            <input type="text" class="form-control" placeholder="" name="title"
                                value="{{ $employee->department->title }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="form-label">Salary</label>
                            <input type="text" class="form-control" placeholder="salary" name="salary"
                                value="{{ $employee->salary }}">
                        </div>
                        <div class="col-md-6">
                            <label for="form-label">Amount</label>
                            <input type="number" class="form-control" name="amount" value="{{ $employee->amount }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="form-label">Join Date</label>
                            <input type="date" class="form-control" name="join_date" value="{{ $employee->join_date }}">
                        </div>
                        <div class="col-md-6">
                            <label for="form-label">End Date</label>
                            <input type="date" class="form-control" name="end_date" id="end-date">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="form-label">Phone</label>
                            <input type="number" class="form-control" ​ name="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="form-label">Photo</label>
                            <input type="file" class="form-control" placeholder="Choose" name="photo"
                                value="{{ $employee->photo }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="form-label">Detail</label>
                            <input type="text" class="form-control" placeholder="detail" name="detail"
                                value="{{ $employee->detail }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="date_of_birth"
                                value="{{ $employee->date_of_birth }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="form-label">Gender</label>
                            <select class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success"> submit </button>
                </form>
            </div>
        </div>
    </div>
@endsection
