<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // category
        $data = [
            'Mobile',
            'Laptop',
            'Tablet',
            'Desktop',
            'Smartwatch',
            'Headphone',
            'Speaker',
            'Camera',
            'Printer',
            'Monitor',
            'TV',
            'Accessories',
        ];
        
        foreach($data as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
