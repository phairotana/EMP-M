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

                    <div class="row">
                        <div class="form-group col-md-6 ">
                            <label class="form-label">Name <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control" placeholder="name" name="name">
                            @if (!empty($errors->first('name')))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Email <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control" placeholder="email" name="email">
                            @if (!empty($errors->first('email')))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="form-group col-md-6">
                            <label for="form-label">Address​ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="address" name="address">
                            @if (!empty($errors->first('address')))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="form-label">Department <span class="text-danger">*</span></label>
                            <select name="department_id" data-required="1" class="form-control">
                                @foreach ($employee as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="form-group col-md-6">
                            <label for="form-label">Salary Type <span class="text-danger">*</span></label>
                            <select name="salary_id" data-required="1" class="form-control">
                                @foreach ($salaries as $item)
                                    <option value="{{ $item->id }}">{{ $item->salary }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="form-group">Amount<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" placeholder="amount" name="amount">
                            @if (!empty($errors->first('amount')))
                                <span class="text-danger">{{ $errors->first('amount') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="form-label">Phone<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" placeholder="phone" name="phone">
                            @if (!empty($errors->first('phone')))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Photo<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" placeholder="Choose" name="photo">
                            @if (!empty($errors->first('photo')))
                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="form-label">Date of Birth<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" placeholder="date_of_birth" name="date_of_birth">
                            @if (!empty($errors->first('date_of_birth')))
                                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Gender<span class="text-danger">*</span></label>
                            <select class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="form-group">end_date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" placeholder="end_date" name="join_date">
                            @if (!empty($errors->first('join_date')))
                                <span class="text-danger">{{ $errors->first('join_date') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="form-group">End Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" placeholder="end_date" name="end_date">
                            @if (!empty($errors->first('end_date')))
                                <span class="text-danger">{{ $errors->first('end_date') }}</span>
                            @endif
                        </div>

                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="form-label">Detail<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="detail"></textarea>
                            @if (!empty($errors->first('detail')))
                                <span class="text-danger">{{ $errors->first('detail') }}</span>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3"> Submit </button>
                </form>
            </div>
        </div>
    </div>

@stop
