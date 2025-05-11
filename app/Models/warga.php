<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';

    protected $fillable = [
        'pengguna_id', 'nik', 'kk', 'alamat', 'rt_rw', 'desa', 'kecamatan', 'tanggal_lahir', 'jenis_kelamin',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}

