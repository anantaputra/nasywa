<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for($i=0; $i<5; $i++){
            User::create([
                'id' => 'user_' . $i,
                'firstname' => $faker->name,
                'lastname' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
            UserDetail::create([
                'id' => 'user_detail_' . $i,
                'user_id' => 'user_' . $i,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
            ]);
        }
    }
}
