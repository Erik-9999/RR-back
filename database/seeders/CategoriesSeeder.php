<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
           'name' => 'sport'
        ]);

        Category::create([
            'name' => 'culture'
        ]);

        Category::create([
            'name' => 'combat'
        ]);

        Category::create([
            'name' => 'coucou seb'
        ]);
    }
}
