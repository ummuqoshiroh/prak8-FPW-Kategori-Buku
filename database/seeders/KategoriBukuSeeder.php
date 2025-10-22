<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriBuku;

class KategoriBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            ['nama_kategori' => 'Fiksi'],
            ['nama_kategori' => 'Non-Fiksi'],
            ['nama_kategori' => 'Teknologi'],
            ['nama_kategori' => 'Sejarah'],
            ['nama_kategori' => 'Pendidikan'],
        ];

        foreach ($kategori as $item) {
            KategoriBuku::create($item);
        }
    }
}
