<?php

use App\Jawaban as AppJawaban;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Jawaban extends Seeder
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
            AppJawaban::create([
                'ujian_id' => $faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
                'soal_id' => $faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
                'user_id' => $faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
                'jawaban_dipilih' => $faker->randomElement(['a', 'b', 'c'])
            ]);
        }
    }
}
