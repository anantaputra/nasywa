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
        Category::create([
            'id' => 'category_1',
            'name' => 'Makanan Basah',
        ]);

        Category::create([
            'id' => 'category_2',
            'name' => 'Makanan Kering',
        ]);
    }
}
