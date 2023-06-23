<?php

namespace Database\Seeders;

use App\Models\GradeItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GradeItem::create([
            'name' => 'practical exam',
            'max_degree' => '20',
        ]);

        GradeItem::create([
            'name' => 'oral exam',
            'max_degree' => '20',
        ]);

        GradeItem::create([
            'name' => 'midterm exam',
            'max_degree' => '20',
        ]);

        GradeItem::create([
            'name' => 'final exam',
            'max_degree' => '40',
        ]);
    }
}
