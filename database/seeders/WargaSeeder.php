<?php

namespace Database\Seeders;

use App\Models\Warga;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            // Buat user dulu
            $user = User::create([
                'name' => 'Warga ' . $i,
                'email' => 'warga' . $i . '@mail.com',
                'password' => bcrypt('password'),
                'role' => 'warga',
            ]);

            // Baru buat data warga yang mengacu ke user itu
            Warga::create([
                'users_id'      => $user->id,
                'nik'           => '32100' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'kk'            => '33000' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'alamat'        => 'Alamat Warga ' . $i,
                'rt_rw'         => '01/01',
                'desa'          => 'Desa Contoh',
                'kecamatan'     => 'Kecamatan Contoh',
                'tanggal_lahir' => now()->subYears(20 + $i),
                'jenis_kelamin' => $i % 2 == 0 ? 'P' : 'L',
            ]);
        }
    }
}
