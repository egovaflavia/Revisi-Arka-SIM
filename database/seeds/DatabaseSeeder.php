<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KategoriSeeder::class);
        $this->call(SoalSeeder::class);
        $this->call(SubtestSeeder::class);
        $this->call(JawabanSeeder::class);
        $this->call(UjianSeeder::class);
        $this->call(UserSeeder::class);
    }
}
