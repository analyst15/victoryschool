<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        Student::insert([
            ['admission_number' => 'S001', 'name' => 'John Doe', 'class' => '2E'],
            ['admission_number' => 'S002', 'name' => 'Jane Smith', 'class' => '3N'],
            ['admission_number' => 'S003', 'name' => 'Alice Brown', 'class' => '4S'],
        ]);
    }
}

