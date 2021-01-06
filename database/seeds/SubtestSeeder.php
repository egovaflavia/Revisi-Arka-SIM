<?php

use App\Subtest;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SubtestSeeder extends Seeder
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
            Subtest::create([
                'sentence' => $faker->sentence,
            ]);
        }
    }
}
