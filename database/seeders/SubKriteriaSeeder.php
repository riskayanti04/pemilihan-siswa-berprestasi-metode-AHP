<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKriteriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('sub_kriteria')->insert([
            // C1 - Nilai Akademik
            [
                'kode' => 'SC1',
                'kode_kriteria' => 'C1',
                'nama' => 'Nilai ≥ 90',
                'parameter' => 'Sangat Baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'SC2',
                'kode_kriteria' => 'C1',
                'nama' => 'Nilai 80–89',
                'parameter' => 'Baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'SC3',
                'kode_kriteria' => 'C1',
                'nama' => 'Nilai 70–79',
                'parameter' => 'Cukup',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // C2 - Prestasi Non Akademik
            [
                'kode' => 'SC4',
                'kode_kriteria' => 'C2',
                'nama' => 'Juara Nasional',
                'parameter' => 'Sangat Baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'SC5',
                'kode_kriteria' => 'C2',
                'nama' => 'Juara Provinsi',
                'parameter' => 'Baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'SC6',
                'kode_kriteria' => 'C2',
                'nama' => 'Juara Kabupaten',
                'parameter' => 'Cukup',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // C3 - Disiplin
            [
                'kode' => 'SC7',
                'kode_kriteria' => 'C3',
                'nama' => 'Tidak Pernah Terlambat',
                'parameter' => 'Sangat Baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'SC8',
                'kode_kriteria' => 'C3',
                'nama' => 'Terlambat < 3 kali',
                'parameter' => 'Baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'SC9',
                'kode_kriteria' => 'C3',
                'nama' => 'Terlambat ≥ 3 kali',
                'parameter' => 'Cukup',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // C4 - Keaktifan Organisasi
            [
                'kode' => 'SC10',
                'kode_kriteria' => 'C4',
                'nama' => 'Aktif Sebagai Ketua',
                'parameter' => 'Sangat Baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'SC11',
                'kode_kriteria' => 'C4',
                'nama' => 'Aktif Sebagai Anggota',
                'parameter' => 'Baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'SC12',
                'kode_kriteria' => 'C4',
                'nama' => 'Tidak Aktif',
                'parameter' => 'Cukup',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // C5 - Sikap
            [
                'kode' => 'SC13',
                'kode_kriteria' => 'C5',
                'nama' => 'Sangat Sopan dan Bertanggung Jawab',
                'parameter' => 'Sangat Baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'SC14',
                'kode_kriteria' => 'C5',
                'nama' => 'Sopan dan Bertanggung Jawab',
                'parameter' => 'Baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'SC15',
                'kode_kriteria' => 'C5',
                'nama' => 'Kurang Sopan',
                'parameter' => 'Cukup',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
