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
        // $faker = Faker::create('id_ID');
        // for ($i = 1; $i <= 2; $i++) {
        //     AppKategori::create([
        //         'sentence' => $faker->sentence,
        //         'subsentence' => $faker->sentence,
        //         'file' => 'https://placehold.co/300x200',
        //     ]);
        // }

        AppKategori::create([
            'sentence' => 'Buat SIM A',
            'subsentence' => 'Buat SIM A',
            'file' => 'SimABaru.jpg',
        ]);

        AppKategori::create([
            'sentence' => 'Perpanjang SIM A',
            'subsentence' => 'Perpanjang SIM A',
            'file' => 'SimaAPerpanjang.jpg',
        ]);
        AppKategori::create([
            'sentence' => 'Buat SIM C',
            'subsentence' => 'Buat SIM C',
            'file' => 'SIMCBaru.jpg',
        ]);

        AppKategori::create([
            'sentence' => 'Perpanjang SIM C',
            'subsentence' => 'Perpanjang SIM C',
            'file' => 'SIMCPerpanjang.png',
        ]);
    }
}
