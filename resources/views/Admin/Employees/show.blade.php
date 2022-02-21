@extends('layouts.blank')
@section('content')

    <style>
        .table-borderless td,
        .table-borderless th{
            border: none;
        }
    </style>
    <script href="https://cdnjs.com/libraries/ekko-lightbox"></script>

    <div class="col-md-12">

        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Detail data
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="container mt-2 mb-4 p-3 d-flex justify-content-center">
                            <div class="card p-4">
                                <div>
                                    <div class=" image d-flex flex-column justify-content-center align-items-center">
                                        @if (empty($employee->photo))
                                            <a href="{{ asset('uploads/files/default/default-image.png') }}"
                                                data-lightbox="image-1"><img class="rounded-circle"
                                                    src="{{ asset('uploads/files/default/default-image.png') }}" height="100"
                                                    width="100" /></a>
                                        @else
                                            <a href="{{ asset($employee->photo) }}" data-lightbox="image-1"><img
                                                    class="rounded-circle" src="{{ asset($employee->photo) }}" height="100"
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
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tr>
                                <th style="width: 10%">Name</th>
                                <td style="width: 2%">:</td>
                                <td>{{ $employee->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>:</td>
                                <td>{{ $employee->email }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>:</td>
                                <td>{{ $employee->address }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>:</td>
                                <td>{{ $employee->address }}</td>
                            </tr>
                            <tr>
                                <th>Department</th>
                                <td>:</td>
                                <td>{{ $employee->department->title }}</td>
                            </tr>
                            <tr>
                                <th>Salary</th>
                                <td>:</td>
                                <td>{{ $employee->salary->salary }}</td>
                            </tr>
                            <tr>
                                <th>Amount</th>
                                <td>:</td>
                                <td>{{ $employee->amount }}</td>
                            </tr>
                            <tr>
                                <th>Join Date</th>
                                <td>:</td>
                                <td>{{ $employee->join_date }}</td>
                            </tr>
                            <tr>
                                <th>End Date</th>
                                <td>:</td>
                                <td>{{ $employee->end_date }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>:</td>
                                <td>{{ $employee->phone }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

