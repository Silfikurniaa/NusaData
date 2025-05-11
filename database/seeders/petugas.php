<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



{
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) {
            $user = User::create([
                'name' => 'Petugas ' . $i,
                'email' => 'petugas'.$i.'@mail.com',
                'password' => bcrypt('password'),
                'role' => 'petugas',
            ]);

            Petugas::create([
                'user_id' => $user->id,
                'nip' => 'NIP00' . $i,
                'jabatan' => 'Staf Pelayanan',
            ]);
        }
    }
}

