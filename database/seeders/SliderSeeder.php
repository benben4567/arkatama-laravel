<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Slider yang sudah approve
        for ($i=0; $i < 3; $i++) {
            Slider::create([
                'title' => $faker->sentence(3),
                'caption' => $faker->sentence(10),
                'approve' => '1'
            ]);
        }
        
        // Slider yang belum approve
        for ($i=0; $i < 3; $i++) {
            Slider::create([
                'title' => $faker->sentence(3),
                'caption' => $faker->sentence(10),
            ]);
        }
    }
}
