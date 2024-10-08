<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tables = [
            ['capacity' => 4],
            ['capacity' => 4],
            ['capacity' => 6],
            ['capacity' => 6],
            ['capacity' => 8],
            ['capacity' => 8],
            ['capacity' => 10],
            ['capacity' => 10],
        ];

        foreach ($tables as $table) {
            \App\Models\Table::create($table);
        }
    }
}
