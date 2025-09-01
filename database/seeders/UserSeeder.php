<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void    {
        User::factory()->create(
            [
                'name' => 'umkm_1',
                'email' => 'umkm1@gmail.com',
                'password' => bcrypt('password123'),
                'nama_bisnis' => 'UMKM Sukses',
                'alamat' => 'Jl. Contoh No. 1, Jakarta',
                'no_telp' => 1234567890,
            ],
        );
    }
}
