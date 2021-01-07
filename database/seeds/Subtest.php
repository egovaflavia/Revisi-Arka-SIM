<?php

use App\Subtest as AppSubtest;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Subtest extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            AppSubtest::create([
                'sentence' => $faker->sentence,
            ]);
        }
    }
}
