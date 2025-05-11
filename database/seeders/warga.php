<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Warga;
use App\Models\Pengguna;

class warga extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for ($i = 1; $i <= 3; $i++) {
            $user = pengguna::create([
                'name' => 'Warga ' . $i,
                'email' => 'warga'.$i.'@mail.com',
                'password' => bcrypt('password'),
                'role' => 'warga',
            ]);

            Warga::create([
                'user_id' => $user->id,
                'nik' => '32760123000' . $i,
                'kk' => '321001200' . $i,
                'alamat' => 'Jalan RT 0' . $i,
                'rt_rw' => '0' . $i . '/01',
                'desa' => 'Desa Contoh',
                'kecamatan' => 'Kecamatan Contoh',
                'tanggal_lahir' => '1990-01-0' . $i,
                'jenis_kelamin' => $i % 2 == 0 ? 'P' : 'L',
            ]);
        }
    }
}
    
