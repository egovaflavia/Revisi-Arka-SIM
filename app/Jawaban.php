<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $fillable =
    [
        'ujian_id',
        'soal_id',
        'user_id',
        'jawaban_dipilih',
    ];

    public function soal()
    {
        return $this->belongsTo('App\Soal', 'soal_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
