<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Monster;

class MonsterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 'name',
        // 'image',
        // 'element',
        // 'description',
        // 'potential',
        // 'health',
        // 'stamina',
        // 'mojo',
        // 'magic',
        // 'strength',
        // 'defense',
        // 'level',
        // 'owner_id',
        Monster::create(
            [
            'name'=>'skritskrat',
            'image'=>'images/monster.jpg',
            'element'=>'fire',
            'description'=>'skritskrat',
            'health'=>rand(250, 3000),
            'stamina'=>rand(250, 1500),
            'mojo'=>rand(10, 50),
            'magic'=>rand(250, 2000),
            'strength'=>rand(250, 2000),
            'defense'=>rand(250, 1000),
            'level'=>rand(1, 30),
            'owner_id'=>1,
            ]
        );
    }
}
