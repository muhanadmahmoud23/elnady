<?php

namespace Database\Seeders;

use App\Models\Score;
use App\Models\Student;
use App\Models\StudentCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LevelsSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(GradeItemSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(StudentCoursesSeeder::class);
        $this->call(ScoreSeeder::class);

    }
}
