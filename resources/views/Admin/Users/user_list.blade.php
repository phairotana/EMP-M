@extends('layouts.blank')

@section('content')
    <div class="card">
        <div class="card-header text-success font-weight-bold">
           User List
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Gende</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">email</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>

            <body>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->profile }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->date_of_birth }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
    @endsection
