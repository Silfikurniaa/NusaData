<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';

    protected $fillable = [
        'pengguna_id', 'nip', 'jabatan',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function wilayahTugas()
    {
        return $this->belongsToMany(WilayahTugas::class, 'petugas_wilayah', 'petugas_id', 'wilayah_id');
    }
}

