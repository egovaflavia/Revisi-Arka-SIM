<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $table = 'ujian';
    protected $fillable =
    [
        'kategori_id',
        'user_id',
        'tgl',
        'mulai',
        'selesai',
        'durasi'
    ];

    public function user()
    {
        return $this->belongsTo('App\user', 'user_id');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }
}
