<?php

use App\Kategori;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KategoriSeeder extends Seeder
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
            Kategori::create([
                'sentence' => $faker->sentence,
                'subsentence' => $faker->sentence,
                'file' => 'https://placehold.co/300x200',
            ]);
        }
    }
}
