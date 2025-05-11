<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WilayahTugas extends Model
{
    protected $table = 'wilayah_tugas';

    protected $fillable = ['nama_wilayah', 'kecamatan'];

    public function petugas()
    {
        return $this->belongsToMany(Petugas::class, 'petugas_wilayah', 'wilayah_id', 'petugas_id');
    }
}
