@extends('layouts.blank')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Add Department
            </div>
            <div class="card-body">
                <form action="{{url('admin/department/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" placeholder="title" name="title">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Detail</label>
                            <textarea class="form-control" name="detail"></textarea>
                        </div>
                    </div>
                <button type="submit" class="btn btn-success mt-3"> Submit </button>
                </form>
            </div>
        </div>
    </div>
@endsection
