<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO add users to houses, maybe make different command or not
        \App\Models\House::create([
            'name' => 'Slytherin',
            'color' => 'green',
            'points' => 0
        ]);
        \App\Models\House::create([
            'name' => 'Gryffindor',
            'color' => 'red',
            'points' => 0
        ]);
        \App\Models\House::create([
            'name' => 'Hufflepuff',
            'color' => 'yellow',
            'points' => 0
        ]);
        \App\Models\House::create([
            'name' => 'Ravenclaw',
            'color' => 'blue',
            'points' => 0
        ]);
    }
}
