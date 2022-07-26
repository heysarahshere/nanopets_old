<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create(
            [
                'name' => "ice cream sandwich",
                'image' => "/images/foods/limetwin.png",
                'description' => "delicious frozen treat that increases your monsters magic and defense",
                'magic' => rand(1, 20),
                'strength' => rand(1, 20),
                'defense' => rand(1, 20),
                'health' => rand(1, 55),
                'breedableStatChance' => rand(1, 30),
                'breedableStat' => "magic",
                'cost' => 2000,
            ]
        );
    }
}
