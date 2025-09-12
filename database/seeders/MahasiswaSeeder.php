<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::create([
            'nama' => 'Ummu Qoshiroh Nur Azziza',
            'npm' => '2310631170055',
            'prodi' => 'Informatika',
            'fakultas' => 'Ilmu Komputer',
            'semester' => 5,
        ]);

        Mahasiswa::create([
            'nama' => 'minhae jungkie',
            'npm' => '2210631170500',
            'prodi' => 'Ilmu Komunikasi',
            'fakultas' => 'Ilmu Sosial & Politik',
            'semester' => 7,
        ]);

        Mahasiswa::create([
            'nama' => 'Maejun Mingka Ningrat',
            'npm' => '2510631178990',
            'prodi' => 'Informatika',
            'fakultas' => 'Ilmu Komputer',
            'semester' => 3,
        ]);

         Mahasiswa::create([
            'nama' => 'Marongkai khoi',
            'npm' => '2110631170000',
            'prodi' => 'Sistem Informasi',
            'fakultas' => 'Ilmu Komputer',
            'semester' => 9,
        ]);
    }
}