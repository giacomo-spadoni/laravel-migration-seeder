<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('trains')->insert([
                'brand' => $faker->company,
                'deperture_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->dateTimeBetween('-1 week', '+1 week'),
                'arrival_time' => $faker->dateTimeBetween('+1 hours', '+2 weeks'),
                'train_code' => $faker->unique()->randomNumber(5),
                'carriages_number' => $faker->numberBetween(1, 20),
                'on_time' => $faker->boolean,
                'cancelled' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
