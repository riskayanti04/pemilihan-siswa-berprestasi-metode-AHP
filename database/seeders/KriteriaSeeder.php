<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('kriteria')->insert([
            [
                'kode' => 'C1',
                'nama' => 'Nilai Akademik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'C2',
                'nama' => 'Prestasi Non Akademik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'C3',
                'nama' => 'Disiplin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'C4',
                'nama' => 'Keaktifan Organisasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'C5',
                'nama' => 'Sikap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
