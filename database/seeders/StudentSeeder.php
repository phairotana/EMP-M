<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name' => 'John Addison',
            'phone' => '88992299112',
            'email' => 'john@yahoo.com',
            'dob' => '2011-02-04',
            'stream' => 'Physics',
        ]);
    }
}
