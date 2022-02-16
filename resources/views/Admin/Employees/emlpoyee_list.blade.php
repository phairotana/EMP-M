@extends('layouts.blank')

@section('content')
    <div class="card">

        @if (session()->get('success'))
            <div class="alert alert-success remove-ms">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card-header text-success font-weight-bold">
            Employee List
        </div>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Department</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Join Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <body>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ optional($employee->department)->title}}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->amount }}</td>
                        <td>{{ $employee->join_date }}</td>
                        <td>{{ $employee->end_date }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>
                            @if (empty($employee->photo))
                                <a href="{{ asset('uploads/files/default/default-image.png') }}"
                                    data-lightbox="image-1"><img class="rounded-circle"
                                        src="{{ asset('uploads/files/default/default-image.png') }}" height="45"
                                        width="45" /></a>
                            @else
                                <a href="{{ asset($employee->photo) }}" data-lightbox="image-1"><img class="rounded-circle"
                                    src="{{ asset($employee->photo) }}" height="45" width="45" /></a>
                            @endif
                        </td>
                        <td>{{ $employee->detail }}</td>
                        <td>{{ $employee->date_of_birth }}</td>
                        <td>{{ $employee->gender}}</td>
                        <td>
                            <a href="{{ URL('admin/employee/' . $employee->id . '/show') }}" class="btn btn-success btn-sm"><i
                                class="fas  fa-eye"></i></a>

                            <a href="{{ URL('admin/employee/' . $employee->id . '/edit') }}"
                                class="btn btn-primary btn-sm" title="Edit"><i class="fas fa-edit"></i></a>

                            <a href="{{ URL('admin/employee-list/' . $employee->id) }}" class="btn btn-danger btn-sm"
                                title="Delete"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
    <script>
        setTimeout(function() {
            $('.remove-ms').addClass('d-none');
        }, 1000);
    </script>

@endsection
