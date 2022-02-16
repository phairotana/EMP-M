@extends('layouts.blank')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Add Salary
            </div>
            <div class="card-body">
                <form action="{{url('admin/salary/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Salary Type</label>
                            <input type="text" class="form-control" placeholder="salary" name="salary">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3"> Submit </button>
                </form>
            </div>
        </div>
    </div>
@endsection
