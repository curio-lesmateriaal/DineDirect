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
            ['name' => 'Starter', 'type' => 'food'],
            ['name' => 'Hoofdgerecht', 'type' => 'food'],
            ['name' => 'Nagerecht', 'type' => 'food'],
            ['name' => 'Alcoholisch', 'type' => 'drink'],
            ['name' => 'Non Alcoholisch', 'type' => 'drink'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }

    }
}
