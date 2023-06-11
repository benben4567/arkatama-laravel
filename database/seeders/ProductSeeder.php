<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $category = Category::all()->pluck('id')->toArray();
        $brand = Brand::all()->pluck('name')->toArray();


        for ($i=0; $i < 50 ; $i++) {
            $price = $faker->numberBetween(100000, 1000000);
            $sale_price = $faker->numberBetween(0, $price);

            $product = Product::create([
                'category_id' => $faker->randomElement($category),
                'name' => $faker->sentence(3),
                'price' => $price,
                'sale_price' => $sale_price,
                'brands' => $faker->randomElement($brand),
                'rating' => $faker->numberBetween(1, 5),
                'approve' => $faker->boolean(25),
            ]);
        }
    }
}
