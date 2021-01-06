<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table = 'soal';
    protected $fillable = [
        'kategori_id',
        'subtest_id',
        'pertanyaan',
        'pilihan_a',
        'pilihan_b',
        'pilihan_c',
        'kunci',
    ];

    public function jawaban()
    {
        return $this->hasMany('App\Jawaban', 'soal_id');
    }

    public function subtest()
    {
        return $this->belongsTo('App\Subtest', 'subtest_id');
    }
}
