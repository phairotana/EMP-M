<?php

namespace App\Models;

use App\Models\Salary;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = [
      'department_id','photo','name','email','phone','gender','address','detail','salary_id','amount','join_date','end_date','date_of_birth'
    ];
    public function department(){
        return $this->belongsTo(Department::class, 'department_id','id');
    }
    public function salary(){
        return $this->belongsTo(Salary::class, 'salary_id','id');
    }
}
