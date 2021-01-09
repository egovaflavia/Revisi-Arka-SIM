<?php

use App\Soal as AppSoal;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Soal extends Seeder
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
            AppSoal::create([
                'kategori_id' => $faker->randomElement(['1', '2']),
                'subtest_id' => $faker->randomElement(['1', '2', '3']),
                'pertanyaan' => $faker->sentence,
                'pilihan_a' => $faker->sentence,
                'pilihan_b' => $faker->sentence,
                'pilihan_c' => $faker->sentence,
                'kunci' => $faker->randomElement(['a', 'b', 'c']),
            ]);
        }
    }
}
