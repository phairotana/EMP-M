<?php

namespace App\Repositories;

interface EmployeeRepoInterface
{
    public function index();
    public function delete($id);
    public function store($request);
    public function update($request,$id);
}
