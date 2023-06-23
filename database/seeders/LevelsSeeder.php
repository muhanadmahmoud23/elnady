<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'name' => 'Level 1',
            'number' => '1',
            'description' => 'Level 1 Description',
        ]);

        Level::create([
            'name' => 'Level 2',
            'number' => '2',
            'description' => 'Level 2 Description',
        ]);

        Level::create([
            'name' => 'Level 3',
            'number' => '3',
            'description' => 'Level 3 Description',
        ]);

        Level::create([
            'name' => 'Level 4',
            'number' => '4',
            'description' => 'Level 4 Description',
        ]);
    }
}
