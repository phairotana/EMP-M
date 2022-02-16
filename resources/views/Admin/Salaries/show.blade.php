@extends('layouts.blank')

@section('content')
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Show data
            </div>
            <div>
                <div class="form-group p-4 mb-4">
                    <div class="row">
                        <div class="col">
                            <strong>Salary:</strong>
                            <table class="table table-striped ">{{ $salary->title }}</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
