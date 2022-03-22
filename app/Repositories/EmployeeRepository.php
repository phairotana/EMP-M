<?php

use App\Http\Resources\EmployeeResource;


    namespace App\Repositories;

    use App\Repositories\EmployeeRepoInterface;


    class EmployeeRepository implements EmployeeRepoInterface
    {
        public function index();
        public function store($request);
        public function update($request, $id);
        public function delete($id);

    }



