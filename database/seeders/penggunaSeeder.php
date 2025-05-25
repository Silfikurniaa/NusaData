<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengguna;

class PenggunaSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        pengguna::create([
            'name' => 'Admin NusaData',
            'email' => 'admin@nusa.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        
        }

        
        }
