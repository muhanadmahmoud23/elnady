<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'full_name' => 'Muhanad Mahmoud',
            'code' => 1,
            'email' => 'muhanadmahmoud@hotmail.com',
            'date_of_birth' => '1994-10-11',
            'level' => 1
        ]);
    }
}
