@extends('layouts.blank')
@section('content')


    <body>
        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Edit User
            </div>
            <div class="card-body ">
                <div class="card-body ">
                    <div class="card-body ">
                        <form action="update" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" placeholder="Title" name="title"
                                            value="{{ $department->tail }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Detail</label>
                                        <textarea class="form-control" placeholder=""
                                            name="detail">{{ $department->detail }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success"> submit </button>
                        </form>
                    </div>
                </div>
    </body>
@endsection
