@extends('layouts.blank')

@section('content')

    <body>
        <div class="card">
            <div class="card-header text-success font-weight-bold">
                Add User
            </div>
            <div class="card-body ">
                <form action="user/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" name="name">
                        </div>
                        <div class="col-md-6 pt-2">
                            <label class="form-label">Gender</label>
                            <select class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" placeholder="" name="date_of_birth">
                        </div>
                        <div class="col-md-6 pt-2">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="" name="email" autocomplete="off">
                        </div>
                        <div class="col-md-6 pt-2">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" autocomplete="off">
                        </div>
                        <div class="col-md-6 pt-2">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Add Profile</label>
                            <input type="file" class="form-control" name="image" placeholder="Choose">
                        </div>
                        <div class="col-md-12 pt-2">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" placeholder="" name="address"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3"> Submit </button>
                    <button type="button" class=" btn btn-secondary mt-3"> Cancel </button>
                </form>
            </div>
        </div>
    </body>
@endsection
