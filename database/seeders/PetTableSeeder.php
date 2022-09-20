<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;

class PetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // 'name',
        // 'line_image',
        // 'color_image',
        // 'eye_image',
        // 'tail_image',
        // 'head_image',
        // 'wing_image',
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

//        $table->integer('potential');
//        $table->integer('health');
//        $table->integer('stamina');
//        $table->integer('mojo');
//        $table->integer('magic');
//        $table->integer('defense');
//        $table->integer('strength');
//        $table->integer('level');
        Pet::create(
            [
                'name'=>'skritskrat',
                'line_image'=>'/images/creatures/dragon/lines.png',
                'color_image'=>'/images/creatures/dragon/color/galaxy.png',
                'eye_image'=>'/images/creatures/dragon/eyes/blue.png',
                'tail_image'=>'/images/creatures/parts/tails/demon_green.png',
                'head_image'=>'/images/creatures/parts/head/horns_long.png',
                'wing_image'=>'/images/creatures/parts/wings/dragonfly_blue.png',
                'element'=>'fire',
                'description'=>'skritskrat',
                'potential'=>rand(10, 50),
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


        Pet::create(
            [
                'name'=>'Gadget',
                'line_image'=>'/images/creatures/lizard/lines.png',
                'color_image'=>'/images/creatures/lizard/color/ghost.png',
                'eye_image'=>'/images/creatures/lizard/eyes/red.png',
                'tail_image'=>'/images/creatures/parts/tails/fish.png',
                'head_image'=>'/images/creatures/parts/head/horns_unicorn.png',
                'wing_image'=>'/images/creatures/parts/wings/fairy_teal.png',
                'element'=>'fire',
                'description'=>'skritskrat',
                'potential'=>rand(10, 50),
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
