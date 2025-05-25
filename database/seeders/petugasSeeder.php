<?php

namespace Database\Seeders;

use App\Models\Petugas;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class petugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Petugas
       // Buat pengguna dulu (karena petugas butuh foreign key ke tabel users)
       $user = User::create([
        'name' => 'Petugas 1',
        'email' => 'petugas1@mail.com',
        'password' => bcrypt('password'),
        'role' => 'petugas',
    ]);

    // Lalu buat petugas yang terhubung ke user tadi
    Petugas::create([
        'users_id' => $user->id,
        'nip' => '1234567890',
        'jabatan' => 'Admin Wilayah',
    ]);

    }
}



