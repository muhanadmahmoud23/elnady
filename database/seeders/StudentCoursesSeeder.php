<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\StudentCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentCourse::create([
            'student_id' => 1,
            'course_id' => 1,
        ]);

        StudentCourse::create([
            'student_id' => 1,
            'course_id' => 2,
        ]);
    }
}
