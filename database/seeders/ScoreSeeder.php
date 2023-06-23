<?php

namespace Database\Seeders;

use App\Models\Score;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Score::create([
            'student_course_id' => 1,
            'grade_id' => 1,
            'score' => 10,
        ]);
        Score::create([
            'student_course_id' => 1,
            'grade_id' => 2,
            'score' => 13,
        ]);
        Score::create([
            'student_course_id' => 1,
            'grade_id' => 3,
            'score' => 19,
        ]);
        Score::create([
            'student_course_id' => 1,
            'grade_id' => 4,
            'score' => 20,
        ]);
        Score::create([
            'student_course_id' => 2,
            'grade_id' => 1,
            'score' => 20,
        ]);
        Score::create([
            'student_course_id' => 2,
            'grade_id' => 2,
            'score' => 18,
        ]);
        Score::create([
            'student_course_id' => 2,
            'grade_id' => 3,
            'score' => 14,
        ]);
        Score::create([
            'student_course_id' => 2,
            'grade_id' =>4,
            'score' => 20,
        ]);
    }
}
