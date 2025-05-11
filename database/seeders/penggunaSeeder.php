<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengguna;

class PenggunaSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        Pengguna::create([
            'name' => 'Admin NusaData',
            'email' => 'admin@nusa.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Petugas
        for ($i = 1; $i <= 3; $i++) {
            Pengguna::create([
                'name' => 'Petugas ' . $i,
                'email' => 'petugas' . $i . '@mail.com',
                'password' => bcrypt('password'),
                'role' => 'petugas',
            ]);
        }

        // Warga
        for ($i = 1; $i <= 3; $i++) {
            Pengguna::create([
                'name' => 'Warga ' . $i,
                'email' => 'warga' . $i . '@mail.com',
                'password' => bcrypt('password'),
                'role' => 'warga',
            ]);
        }
    }
}
