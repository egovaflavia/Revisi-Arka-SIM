<?php

use App\Ujian;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UjianSeeder extends Seeder
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
            Ujian::create([
                'kategori_id' => $faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
                'user_id' => $faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
                'tgl' => $faker->dateTime(),
                'mulai' => $faker->dateTime(),
                'selesai' => $faker->dateTime(),
                'durasi' => $faker->dateTime(),
            ]);
        }
    }
}
