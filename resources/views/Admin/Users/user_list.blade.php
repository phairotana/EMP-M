@extends('layouts.blank')

@section('content')
    <div class="card">

        @if (session()->get('success'))
            <div class="alert alert-success remove-ms">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card-header text-success font-weight-bold">
            User List
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <body>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>
                            @if (empty($user->image))
                                <a href="{{ asset('uploads/files/default/default-image.png') }}"
                                    data-lightbox="image-1"><img class="rounded-circle"
                                        src="{{ asset('uploads/files/default/default-image.png') }}" height="45"
                                        width="45" /></a>
                            @else
                                <a href="{{ asset($user->image) }}" data-lightbox="image-1"><img class="rounded-circle"
                                    src="{{ asset($user->image) }}" height="45" width="45" /></a>
                            @endif
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->date_of_birth ? \Carbon\Carbon::parse($user->date_of_birth)->format('d-m-Y') : '' }}
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <a href="{{ URL('admin/user/' . $user->id . '/show') }}" class="btn btn-success btn-sm"><i
                                    class="fas  fa-eye"></i></a>

                            <a href="{{ URL('admin/user/' . $user->id . '/edit') }}" class="btn btn-primary btn-sm"
                                title="Edit"><i class="fas fa-edit"></i></a>

                            <a href="{{ URL('admin/user-list/' . $user->id) }}" class="btn btn-danger btn-sm"
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
