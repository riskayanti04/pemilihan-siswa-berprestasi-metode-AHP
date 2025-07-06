<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternatifSeeder extends Seeder
{
    public function run()
    {
        DB::table('alternatif')->insert([
            [
                'nisn' => '1234567890',
                'nama' => 'Andi Wijaya',
                'kelas' => 'X',
                'jurusan' => 'IPA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nisn' => '1234567891',
                'nama' => 'Budi Santoso',
                'kelas' => 'XI',
                'jurusan' => 'IPS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nisn' => '1234567892',
                'nama' => 'Citra Lestari',
                'kelas' => 'XII',
                'jurusan' => 'BAHASA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nisn' => '1234567893',
                'nama' => 'Dewi Maharani',
                'kelas' => 'X',
                'jurusan' => 'IPS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nisn' => '1234567894',
                'nama' => 'Eko Prasetyo',
                'kelas' => 'XI',
                'jurusan' => 'IPA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
