<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name' => 'English',
            'code' => '1',
            'description' => 'English Language Course',
        ]);

        Course::create([
            'name' => 'French',
            'code' => '2',
            'description' => 'French Language Course',
        ]);
    }
}
