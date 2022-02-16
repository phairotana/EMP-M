@extends('layouts.blank')
@section('content')

    <body>
        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Edit Salary
            </div>
                    <div class="card-body ">
                        <form action="update" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-12">
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
    </body>
@endsection
