@extends('layouts.blank')

@section('content')
    <div class="row text">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">EMP MANAGE</h1>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="inputEmail3">Email</label>
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword3">Password</label>
                            <input type="password" class="form-control" id="inputPassword3">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @stop
