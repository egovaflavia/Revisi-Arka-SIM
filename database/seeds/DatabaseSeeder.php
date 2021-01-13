<?php

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
        $this->call(User::class);
        $this->call(Jawaban::class);
        $this->call(Kategori::class);
        $this->call(Soal::class);
        $this->call(Subtest::class);
        $this->call(Ujian::class);
        $this->call(DataUser::class);
    }
}
