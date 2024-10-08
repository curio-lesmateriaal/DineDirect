<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Starter'],
            ['name' => 'Hoofdgerecht'],
            ['name' => 'Nagerecht'],
            ['name' => 'Alcoholisch'],
            ['name' => 'Non Alcoholisch'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }

    }
}
