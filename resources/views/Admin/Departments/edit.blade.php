@extends('layouts.blank')
@section('content')

    <body>
        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Edit Department
            </div>
            <div class="card-body ">
                <form action="update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-12">
                               <div class="form-group">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" placeholder="title" name="title"
                                    value="{{ $department->title }}">
                               </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Detail</label>
                                <textarea type="text" class="form-control" name="detail"
                                    autocomplete="off">{{ $department->detail }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success"> submit </button>
                </form>
            </div>
        </div>
    </body>

@endsection
