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
                'magic' => 10,
                'defense' => 5,
            ]
        );
    }
}
