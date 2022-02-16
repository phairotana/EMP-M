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
                                        <a href="{{ asset($user->image) }}" data-lightbox="image-1"><img
                                                class="rounded-circle" src="{{ asset($user->image) }}" height="100"
                                                width="100" /></a>
                                    @endif
                                </div>
                                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                    <span>{{ $user->name }}</span>
                                </div class="d-flex flex-row justify-content-center align-items-center mt-3">
                                <div>
                                    <span>{{ $user->email }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group p-4 mb-4">
                    <div class="row">
                        <div class="col">
                            <strong>Full Name:</strong>
                            <table class="table table-striped">{{ $user->name }}</table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Gender:</strong>
                            <table class="table table-striped">{{ $user->gender }}</table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Date_of_birth:</strong>
                            <table class="table table-striped">{{ $user->date_of_birth }}</table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Email</strong>
                            <table class="table table-striped">{{ $user->email }}</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
