@extends('layouts.blank')
@section('content')
    <div class="col-md-12">

        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Add Employee
            </div>
            <div class="card-body">
                <form action="{{ url('admin/employee/store') }}" Method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-6 ">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="name" name="name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="email" name="email">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="address" name="address">
                        </div>
                        <div class="col-md-6">
                            <label for="form-label">Department</label>
                            <select name="department_id" data-required="1" class="form-control">
                                @foreach ($employee as $item)
                                    <option value="{{ $item->id }}"> {{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="form-label">Salary</label>
                            <select class="form-control" name="gender">
                                <option value="Months">months</option>
                                <option value="Days">days</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="form-group">Amount</label>
                            <input type="number" class="form-control" placeholder="amount" name="amount">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="form-label">Phone</label>
                            <input type="number" class="form-control" placeholder="phone" name="phone">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Photo</label>
                            <input type="file" class="form-control" placeholder="Choose" name="photo">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" placeholder="date_of_birth" name="date_of_birth">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Gender</label>
                            <select class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="form-group">Join Date</label>
                            <input type="date" class="form-control" placeholder="join date" name="join_date">
                        </div>
                        <div class="col-md-6">
                            <label for="form-group">End Date</label>
                            <input type="date" class="form-control" placeholder="join date" name="end_date">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="form-label">Detail</label>
                            <textarea class="form-control" name="detail"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3"> Submit </button>
                </form>
            </div>
        </div>
    </div>

@stop
