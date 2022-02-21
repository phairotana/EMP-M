@extends('layouts.blank')
@section('content')
    <script href="https://cdnjs.com/libraries/ekko-lightbox"></script>

    <div class="col-md-12">

        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Detail data
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="container mt-2 mb-4 p-3 d-flex justify-content-center">
                        <div class="card p-4">
                            <div>
                                <div class=" image d-flex flex-column justify-content-center align-items-center">
                                    @if (empty($user->image))
                                        <a href="{{ asset('uploads/files/default/default-image.png') }}"
                                            data-lightbox="image-1"><img class="rounded-circle"
                                                src="{{ asset('uploads/files/default/default-image.png') }}" height="100"
                                                width="100" /></a>
                                    @else
                                        <a href="{{ asset($user->photo) }}" data-lightbox="image-1"><img
                                                class="rounded-circle" src="{{ asset($user->photo) }}" height="100"
                                                width="100" /></a>
                                    @endif
                                </div>
                                {{-- <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                    <span>{{$employee->name }}</span>
                                </div class="d-flex flex-row justify-content-center align-items-center mt-3">
                                <div>
                                    <span>{{$employee->email }}</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group p-4 mb-4">
                    <div class="row">
                        <div class="col">
                            <strong>Name</strong>
                            <table class="table table-striped">{{ $employee->name }}</table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Email</strong>
                            <table class="table table-striped">{{ $employee->email }}</table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Address:</strong>
                            <table class="table table-striped">{{ $employee->address }}</table>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col">
                            <strong>Department:</strong>
                            <table class="table table-striped">{{$employee->department->title }}</table>
                        </div>
                    </div> --}}
                    {{-- <div class="row">
                        <div class="col">
                            <strong>Salary Type:</strong>
                            <table class="table table-striped">{{$employee->salary->salary }}</table>
                        </div>
                    </div> --}}

                    <div class="row">
                        <div class="col">
                            <strong>Amount</strong>
                            <table class="table table-striped">{{ $employee->amount }}</table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Join Date</strong>
                            <table class="table table-striped">{{ $employee->join_date }}</table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>End Date</strong>
                            <table class="table table-striped">{{ $employee->end_date }}</table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Phone</strong>
                            <table class="table table-striped">{{ $employee->phone }}</table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Detail</strong>
                            <table class="table table-striped">{{ $employee->detail }}</table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Date of Birth</strong>
                            <table class="table table-striped">{{ $employee->date_of_birth }}</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
