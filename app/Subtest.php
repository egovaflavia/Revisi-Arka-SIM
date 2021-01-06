<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtest extends Model
{
    protected $table = 'subtest';
    protected $fillable = ['sentence'];

    public function soal()
    {
        return $this->belongsTo('App\Soal', 'subtest_id');
    }
}
