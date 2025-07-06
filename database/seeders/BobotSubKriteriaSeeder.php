<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BobotSubKriteriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('bobot_sub_kriteria')->insert([
            // Perbandingan antar subkriteria untuk Kriteria C1

            // SC1 vs others
            [
                'kode_sub_kriteria_1' => 'SC1',
                'kode_sub_kriteria_2' => 'SC1',
                'nilai' => 1,
            ],
            [
                'kode_sub_kriteria_1' => 'SC1',
                'kode_sub_kriteria_2' => 'SC2',
                'nilai' => 3,
            ],
            [
                'kode_sub_kriteria_1' => 'SC1',
                'kode_sub_kriteria_2' => 'SC3',
                'nilai' => 4,
            ],

            // SC2 vs others
            [
                'kode_sub_kriteria_1' => 'SC2',
                'kode_sub_kriteria_2' => 'SC1',
                'nilai' => 1/3,
            ],
            [
                'kode_sub_kriteria_1' => 'SC2',
                'kode_sub_kriteria_2' => 'SC2',
                'nilai' => 1,
            ],
            [
                'kode_sub_kriteria_1' => 'SC2',
                'kode_sub_kriteria_2' => 'SC3',
                'nilai' => 2,
            ],

            // SC3 vs others
            [
                'kode_sub_kriteria_1' => 'SC3',
                'kode_sub_kriteria_2' => 'SC1',
                'nilai' => 1/4,
            ],
            [
                'kode_sub_kriteria_1' => 'SC3',
                'kode_sub_kriteria_2' => 'SC2',
                'nilai' => 1/2,
            ],
            [
                'kode_sub_kriteria_1' => 'SC3',
                'kode_sub_kriteria_2' => 'SC3',
                'nilai' => 1,
            ],
        ]);
    }
}
