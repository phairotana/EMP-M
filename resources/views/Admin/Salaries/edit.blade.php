@extends('layouts.blank')
@section('content')

    <div class="col-md-12">

        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Add Salary
            </div>
            <div class="card-body ">
                <form action="update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Salary</label>
                                <input type="text" class="form-control" placeholder="salary" name="salary"
                                value="{{ $salaries->salary }}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success"> submit </button>
                </form>
            </div>
        </div>
    </div>

@endsection
