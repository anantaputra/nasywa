<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        $category = [
            'category_1',
            'category_2',
        ];

        for($i=0; $i<5; $i++){
            Product::create([
                'id' => 'product_' . $i,
                'name' => $faker->name,
                'price' => $faker->randomFloat(2, 0, 100),
            ]);
            ProductDetail::create([
                'id' => 'product_detail_' . $i,
                'product_id' => 'product_' . $i,
                'category_id' => $category[rand(0, 1)],
                'description' => $faker->text,
                'weight' => $faker->randomFloat(2, 0, 100),
            ]);
        }
    }
}
