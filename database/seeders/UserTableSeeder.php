<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\User');

        for($i = 1; $i < 10; $i++) {
            DB::table('users')->insert([
                'email' => $faker->freeEmail,
                'full_name' => $faker->sentence,
                'experience' => $faker->randomDigitNotNull,
                'image' => $faker->image,
                'average_salary' => $faker->randomDigitNotNull,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
