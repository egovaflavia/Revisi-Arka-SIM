<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = [
        'sentence',
        'subsentence',
        'file',
    ];

    public function ujian()
    {
        return $this->hasMany('App\Ujian', 'kategori_id');
    }
}
