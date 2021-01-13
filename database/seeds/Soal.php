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
        // $faker = Faker::create('id_ID');
        // for ($i = 0; $i < 10; $i++) {
        //     AppSoal::create([
        //         'kategori_id' => $faker->randomElement(['1', '2']),
        //         'subtest_id' => $faker->randomElement(['1', '2', '3']),
        //         'pertanyaan' => $faker->sentence,
        //         'pilihan_a' => $faker->sentence,
        //         'pilihan_b' => $faker->sentence,
        //         'pilihan_c' => $faker->sentence,
        //         'kunci' => $faker->randomElement(['a', 'b', 'c']),
        //     ]);
        // }

        // Subtest 1
        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan - Y – adalah suatu….',
            'pilihan_a' => 'BUNGA',
            'pilihan_b' => 'BINATANG',
            'pilihan_c' => 'PERKAKAS',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan - I – adalah suatu….',
            'pilihan_a' => 'BUNGA',
            'pilihan_b' => 'BINATANG',
            'pilihan_c' => 'PERKAKAS',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan - E – adalah suatu…',
            'pilihan_a' => 'BUNGA',
            'pilihan_b' => 'BINATANG',
            'pilihan_c' => 'PERKAKAS',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan - J – adalah suatu….',
            'pilihan_a' => 'BUNGA',
            'pilihan_b' => 'BINATANG',
            'pilihan_c' => 'PERKAKAS',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan –	W – adalah suatu….',
            'pilihan_a' => 'BUNGA',
            'pilihan_b' => 'BINATANG',
            'pilihan_c' => 'PERKAKAS',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan - M – adalah suatu…. ',
            'pilihan_a' => 'BUNGA',
            'pilihan_b' => 'BINATANG',
            'pilihan_c' => 'PERKAKAS',
            'kunci' => 'a',
        ]);
        // Subtest 2
        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '6 Februari',
            'pilihan_b' => '6 Pebruari',
            'pilihan_c' => '',
            'kunci' => 'b',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'Rp 1.000.000',
            'pilihan_b' => 'Rp. 1.000.000',
            'pilihan_c' => '',
            'kunci' => 'b',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '656566',
            'pilihan_b' => '656566',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'FRAWTX',
            'pilihan_b' => 'FRAWXR',
            'pilihan_c' => '',
            'kunci' => 'b',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '121212',
            'pilihan_b' => '121212',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '71070',
            'pilihan_b' => '71007',
            'pilihan_c' => '',
            'kunci' => 'b',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'kokokokok',
            'pilihan_b' => 'kokokokok',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'ISER',
            'pilihan_b' => 'IESR',
            'pilihan_c' => '',
            'kunci' => 'b',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'TMSNW',
            'pilihan_b' => 'TMSNW',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'aquarius',
            'pilihan_b' => 'aquaries',
            'pilihan_c' => '',
            'kunci' => 'b',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'mancanegara',
            'pilihan_b' => 'mencanegara',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '08956342517',
            'pilihan_b' => '08956342517',
            'pilihan_c' => '',
            'kunci' => 'b',
        ]);
        // Subtest 3
        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya menjadi marah saat ada yang mengkritik saya',
            'pilihan_b' => 'Saya berusaha meredam amarah dengan menarik napas',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya ingin orang lain memahami kondisi saya setiap waktu',
            'pilihan_b' => 'Saya mampu memahami keadaan orang sekitar saya',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya mampu mengontrol diri saya saat menghadapi situasi sulit',
            'pilihan_b' => 'Saya mudah terbawa dan terpengaruh suasana sekitar saya',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya cenderung marah saat berada di kemacetan',
            'pilihan_b' => 'Saya bias saja gelisah saat berada di kemacetan',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya berusaha menyesuaikan suasana lingkungan baru meski butuh waktu',
            'pilihan_b' => 'Saya cenderung menghindari berinteraksi dengan orang baru',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 1,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya sulit menerima pendapat orang lain mengenai diri saya',
            'pilihan_b' => 'Saya terbiasa menyaring masukan yang diberikan orang lain terhadap saya',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        // SIM A

        // Subtest 1
        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan - S – adalah suatu….',
            'pilihan_a' => 'BUNGA',
            'pilihan_b' => 'BINATANG',
            'pilihan_c' => 'PERKAKAS',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan - D – adalah suatu….',
            'pilihan_a' => 'BUNGA',
            'pilihan_b' => 'BINATANG',
            'pilihan_c' => 'PERKAKAS',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan - P – adalah suatu….',
            'pilihan_a' => 'BUNGA',
            'pilihan_b' => 'BINATANG',
            'pilihan_c' => 'PERKAKAS',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan - C – adalah suatu….',
            'pilihan_a' => 'BUNGA',
            'pilihan_b' => 'BINATANG',
            'pilihan_c' => 'PERKAKAS',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan - G – adalah suatu….',
            'pilihan_a' => 'BUNGA',
            'pilihan_b' => 'BINATANG',
            'pilihan_c' => 'PERKAKAS',
            'kunci' => 'a',
        ]);
        // Subtest 2
        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '6869696',
            'pilihan_b' => '6869696',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'bkjskhsaksaj',
            'pilihan_b' => 'bkjskhsaksaj',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'I love you',
            'pilihan_b' => 'I live you',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'Suhandoyo',
            'pilihan_b' => 'Suhandoyo',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'MCRSFT',
            'pilihan_b' => 'MCRSFT',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'Indonesia',
            'pilihan_b' => 'Indonesian',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'Singo Group',
            'pilihan_b' => 'Singo Grup',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'UNLRE',
            'pilihan_b' => 'UNRLE',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'belajar.com',
            'pilihan_b' => 'belajar.co.id',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '##%$$@@&',
            'pilihan_b' => '##%$$@@&',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);
        // Subtest 3
        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya melakukan segala sesuatu dengan hati-hati',
            'pilihan_b' => 'Saya cenderung tergesa-gesa dalam bertindak',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya merasa emosi saya mudah meledak-ledak',
            'pilihan_b' => 'Saya merasa emosi saya berubah saat menghadapi situasi berbeda',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya akan mengomel saat ada yang menyalip saya di jalan',
            'pilihan_b' => 'Saya kesal saat ada yang menyalip saya di jalan',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya terbiasa sabar menunggu antrian',
            'pilihan_b' => 'Saya akan membiarkan orang lain mengambil antrian saya',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya sulit mengungkapkan apa yang dirasakan kepada orang lain',
            'pilihan_b' => 'Saya berusaha menyampaikan yang dirasakan dengan Bahasa yang tepat',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 2,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya membutuhkan waktu untuk memulai pembicaraan dengan orang lain',
            'pilihan_b' => 'Saya terbiasa menghindari orang- orang yang baru dikenal',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        // SIM C Buat
        // Subtest 1
        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan – J – adalah suatu….',
            'pilihan_a' => 'KOTA',
            'pilihan_b' => 'ATK',
            'pilihan_c' => 'BUAH',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan – K – adalah suatu….',
            'pilihan_a' => 'KOTA',
            'pilihan_b' => 'ATK',
            'pilihan_c' => 'BUAH',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan – S – adalah suatu….',
            'pilihan_a' => 'KOTA',
            'pilihan_b' => 'ATK',
            'pilihan_c' => 'BUAH',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan – M – adalah suatu….',
            'pilihan_a' => 'KOTA',
            'pilihan_b' => 'ATK',
            'pilihan_c' => 'BUAH',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan – P – adalah suatu….',
            'pilihan_a' => 'KOTA',
            'pilihan_b' => 'ATK',
            'pilihan_c' => 'BUAH',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan – N – adalah suatu….',
            'pilihan_a' => 'KOTA',
            'pilihan_b' => 'ATK',
            'pilihan_c' => 'BUAH',
            'kunci' => 'a',
        ]);
        // Subtest 2
        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '636363',
            'pilihan_b' => '363636',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'Yayuk, Ayu',
            'pilihan_b' => 'Yayuk, Ayu',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'GESIZT',
            'pilihan_b' => 'GESIZT',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'BGRET',
            'pilihan_b' => 'BRETG',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'GROSS',
            'pilihan_b' => 'GROSS',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'FEVIFT',
            'pilihan_b' => 'FIVEFT',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '656654',
            'pilihan_b' => '656654',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'sepeda motor',
            'pilihan_b' => 'speda motor',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '(@@$$%%)',
            'pilihan_b' => '(@@$$%*)',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '081239867541',
            'pilihan_b' => '081239867541',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);
        // Subtest 3
        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya menjadi marah saat ada yang mengkritik saya',
            'pilihan_b' => 'Saya berusaha meredam amarah dengan menarik napas',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya ingin orang lain memahami kondisi saya setiap waktu',
            'pilihan_b' => 'Saya mampu memahami keadaan orang sekitar saya',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya mampu mengontrol diri saya saat menghadapi situasi sulit',
            'pilihan_b' => 'Saya mudah terbawa dan terpengaruh suasana sekitar saya',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya cenderung marah saat berada di kemacetan',
            'pilihan_b' => 'Saya bias saja gelisah saat berada di kemacetan',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya berusaha menyesuaikan suasana lingkungan baru meski butuh waktu',
            'pilihan_b' => 'Saya cenderung menghindari berinteraksi dengan orang baru',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 3,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya sulit menerima pendapat orang lain mengenai diri saya',
            'pilihan_b' => 'Saya terbiasa menyaring masukan yang diberikan orang lain terhadap saya',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);


        // Subtest 1
        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan – B – adalah suatu….',
            'pilihan_a' => 'KOTA',
            'pilihan_b' => 'ATK',
            'pilihan_c' => 'BUAH',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan – A – adalah suatu….',
            'pilihan_a' => 'KOTA',
            'pilihan_b' => 'ATK',
            'pilihan_c' => 'BUAH',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan – D – adalah suatu….',
            'pilihan_a' => 'KOTA',
            'pilihan_b' => 'ATK',
            'pilihan_c' => 'BUAH',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan – M – adalah suatu….',
            'pilihan_a' => 'KOTA',
            'pilihan_b' => 'ATK',
            'pilihan_c' => 'BUAH',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 1,
            'pertanyaan' => 'Kata yang mempunyai huruf permulaan – J – adalah suatu….',
            'pilihan_a' => 'KOTA',
            'pilihan_b' => 'ATK',
            'pilihan_c' => 'BUAH',
            'kunci' => 'a',
        ]);
        // Subtest 2
        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'Rudi Hariyanto',
            'pilihan_b' => 'Rudi Heriyanto',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'Sedekah',
            'pilihan_b' => 'Sodakoh',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '4441441',
            'pilihan_b' => '4441441',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '6547',
            'pilihan_b' => '6547',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '1972',
            'pilihan_b' => '1972',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => 'mercedes benz',
            'pilihan_b' => 'marcedes benz',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '€€¥¥??**',
            'pilihan_b' => '€€¥¥??**',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '0741-43562',
            'pilihan_b' => '0741-43552',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 2,
            'pertanyaan' => 'Pilih B (Benar) jika kedua pernyataan sama dan S (Salah) jika keduanya berbeda !',
            'pilihan_a' => '@prakerja.go.id',
            'pilihan_b' => '@prakerja.co.id',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);
        // Subtest 3
        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya terbiasa melampiaskan emosi pada sekitar',
            'pilihan_b' => 'Saya mampu meredam emosi negatif dalam diri saya',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya terbuka dengan setiap masukan/pendapat orang lain',
            'pilihan_b' => 'Saya terbiasa menerima pujian untuk semangat saya',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya merasa ragu dapat mneyesuaikan diri dengan lingkungan baru',
            'pilihan_b' => 'Saya yakin dapat berbaur dengan lingkungan baru meski butuh waktu',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya merasa canggung meminta bantuan kepada orang lain',
            'pilihan_b' => 'Ketika merasa kesulitan saya akan berusaha mencari pertolongan',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);

        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya mampu mengatasi rasa kesal yang saya rasakan',
            'pilihan_b' => 'Rasa kesal bertahan lama dalam diri saya',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);


        AppSoal::create([

            'kategori_id' => 4,
            'subtest_id' => 3,
            'pertanyaan' => 'Pilihlah pernyataan yang sesuai dengan diri anda!!!',
            'pilihan_a' => 'Saya cenderung sulit menghadapi konflik yang dialami',
            'pilihan_b' => 'Terlibat perseteruan adalah hal yang paling saya hindari',
            'pilihan_c' => '',
            'kunci' => 'a',
        ]);
    }
}
