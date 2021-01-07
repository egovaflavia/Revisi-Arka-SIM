<?php

use App\Kategori as AppKategori;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Kategori extends Seeder
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
            AppKategori::create([
                'sentence' => $faker->sentence,
                'subsentence' => $faker->sentence,
                'file' => 'https://placehold.co/300x200',
            ]);
        }
    }
}
