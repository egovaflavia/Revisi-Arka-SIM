<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    protected $table = 'data_user';
    protected $fillable =
    [
        'user_id',
        'nik',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'suku',
        'pendidikan',
        'pekerjaan',
        'agama',
        'alamat',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
