@extends('layouts.blank')

@section('content')
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Detail data
            </div>
            <div>
                <div class="form-group p-4 mb-4">
                    <div class="row">
                        <div class="col">
                            <strong>Title:</strong>
                            <table class="table table-striped ">{{ $department->title }}</table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Detail:</strong>
                            <table class="table table-striped">{{ $department->detail }}</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
