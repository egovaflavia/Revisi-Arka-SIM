<?php

use App\DataUser as AppDataUser;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DataUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('id_ID');
        // for ($i = 0; $i < 4; $i++) {
        //     AppDataUser::create([
        //         'user_id' => $faker->randomElement(['1', '2', '3', '4']),
        //         'nik' => $faker->bankAccountNumber,
        //         'nama' => $faker->name(),
        //         'tempat_lahir' => $faker->address,
        //         'tgl_lahir' => $faker->date(),
        //         'suku' => $faker->sentence(),
        //         'pendidikan' => $faker->company,
        //         'pekerjaan' => $faker->company,
        //         'agama' => $faker->sentence(),
        //         'alamat' => $faker->address,
        //     ]);
        // }
    }
}
