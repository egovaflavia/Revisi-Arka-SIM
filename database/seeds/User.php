<?php

use App\User as AppUser;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class User extends Seeder
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
            AppUser::create([
                'name' => $faker->name(),
                'email' => $faker->email,
                'password' => bcrypt('admin'),
                'status' => $faker->randomElement(['1', '2']),
                'level' => $faker->randomElement(['2']),
            ]);
        }

        AppUser::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'max' => 1,
            'status' => '1',
            'level' => '1',
        ]);
    }
}
