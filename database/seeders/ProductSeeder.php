<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        categories are:
              ['name' => 'Starter'],
            ['name' => 'Hoofdgerecht'],
            ['name' => 'Nagerecht'],
            ['name' => 'Alcoholisch'],
            ['name' => 'Non Alcoholisch'],
        */
        $products = [
            [
                'name' => 'Tomatensoep',
                'price' => 4.50,
                'category_id' => 1,
            ],
            [
                'name' => 'Kippensoep',
                'price' => 4.50,
                'category_id' => 1,
            ],
            [
                'name' => 'Biefstuk',
                'price' => 15.50,
                'category_id' => 2,
            ],
            [
                'name' => 'Spareribs',
                'price' => 12.50,
                'category_id' => 2,
            ],
            [
                'name' => 'Appeltaart',
                'price' => 4.50,
                'category_id' => 3,
            ],
            [
                'name' => 'Tiramisu',
                'price' => 4.50,
                'category_id' => 3,
            ],
            [
                'name' => 'Bier',
                'price' => 2.50,
                'category_id' => 4,
            ],
            [
                'name' => 'Wijn',
                'price' => 3.50,
                'category_id' => 4,
            ],
            [
                'name' => 'Cola',
                'price' => 2.00,
                'category_id' => 5,
            ],
            [
                'name' => 'Fanta',
                'price' => 2.00,
                'category_id' => 5,
            ],
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
