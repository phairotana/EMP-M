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
                            <label class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="name" name="name"
                                value="{{ $employee->name }}">
                            @if (!empty($errors->first('name')))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                ​
                            @endif
                        </div>
                        <div class="col-md-6 ">
                            <label class="form-label">Email<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="email" name="email"
                                value="{{ $employee->email }}">
                            @if (!empty($errors->first('email')))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                ​
                            @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6 ">
                            <label class="form-label">Address<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="address" name="address"
                                value="{{ $employee->address }}">
                            @if (!empty($errors->first('address')))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                ​
                            @endif
                        </div>
                        <div class="col-md-6 ">
                            <label class="form-label">Department<span class="text-danger">*</span></label>
                            <select name="department_id" data-required="1" class="form-control">
                                @foreach ($department as $key => $item)
                                    @if ($key == $employee->department_id)
                                        <option value="{{ $key }}" selected>{{ $item }}</option>
                                    @endif
                                    <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="form-label">Salary Type<span class="text-danger">*</span></label>
                            <select name="salary_id" data-required="1" class="form-control">
                                @foreach ($salary as $key => $item)
                                    @if ($key == $employee->salary_id)
                                        <option value="{{ $key }}" selected>{{ $item }}</option>
                                    @endif
                                    <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="form-label">Amount<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="amount" value="{{ $employee->amount }}">
                            @if (!empty($errors->first('amount')))
                                <span class="text-danger">{{ $errors->first('amount') }}</span>
                                ​
                            @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="form-label">Join Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="join_date"
                                value="{{ $employee->join_date }}">
                            @if (!empty($errors->first('join_date')))
                                <span class="text-danger">{{ $errors->first('join_date') }}</span>
                                ​
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="form-label">End Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="end_date" id="end-date">
                            @if (!empty($errors->first('end-date')))
                                <span class="text-danger">{{ $errors->first('end-date') }}</span>
                                ​
                            @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="form-label">Phone<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" ​ name="phone">
                            @if (!empty($errors->first('phone')))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                ​
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="form-label">Photo<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" placeholder="Choose" name="photo"
                                value="{{ $employee->photo }}">

                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="form-label">Detail<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="detail" name="detail"
                                value="{{ $employee->detail }}">
                            @if (!empty($errors->first('detail')))
                                <span class="text-danger">{{ $errors->first('detail') }}</span>
                                ​
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date of Birth<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="date_of_birth"
                                value="{{ $employee->date_of_birth }}">
                            @if (!empty($errors->first('date_of_birth')))
                                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                                ​
                            @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="form-label">Gender<span class="text-danger">*</span></label>
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
