<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // mobile brands
        $data = [
            'Apple',
            'Samsung',
            'Xiaomi',
            'Oppo',
            'Vivo',
            'Realme',
            'Asus',
            'Nokia',
            'Lenovo',
            'Huawei',
            'Sony',
            'LG',
        ];
        
        foreach($data as $brand) {
            Brand::create([
                'name' => $brand,
            ]);
        }
    }
}
