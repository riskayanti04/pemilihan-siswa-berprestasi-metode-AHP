<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BobotKriteriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('bobot_kriteria')->insert([
            // C1
            [
                'kode_kriteria_1' => 'C1',
                'kode_kriteria_2' => 'C1',
                'nilai' => 1,
            ],
            [
                'kode_kriteria_1' => 'C1',
                'kode_kriteria_2' => 'C2',
                'nilai' => 3,
            ],
            [
                'kode_kriteria_1' => 'C1',
                'kode_kriteria_2' => 'C3',
                'nilai' => 5,
            ],
            [
                'kode_kriteria_1' => 'C1',
                'kode_kriteria_2' => 'C4',
                'nilai' => 4,
            ],
            [
                'kode_kriteria_1' => 'C1',
                'kode_kriteria_2' => 'C5',
                'nilai' => 7,
            ],

            // C2
            [
                'kode_kriteria_1' => 'C2',
                'kode_kriteria_2' => 'C1',
                'nilai' => 1/3,
            ],
            [
                'kode_kriteria_1' => 'C2',
                'kode_kriteria_2' => 'C2',
                'nilai' => 1,
            ],
            [
                'kode_kriteria_1' => 'C2',
                'kode_kriteria_2' => 'C3',
                'nilai' => 2,
            ],
            [
                'kode_kriteria_1' => 'C2',
                'kode_kriteria_2' => 'C4',
                'nilai' => 1,
            ],
            [
                'kode_kriteria_1' => 'C2',
                'kode_kriteria_2' => 'C5',
                'nilai' => 4,
            ],

            // C3
            [
                'kode_kriteria_1' => 'C3',
                'kode_kriteria_2' => 'C1',
                'nilai' => 1/5,
            ],
            [
                'kode_kriteria_1' => 'C3',
                'kode_kriteria_2' => 'C2',
                'nilai' => 1/2,
            ],
            [
                'kode_kriteria_1' => 'C3',
                'kode_kriteria_2' => 'C3',
                'nilai' => 1,
            ],
            [
                'kode_kriteria_1' => 'C3',
                'kode_kriteria_2' => 'C4',
                'nilai' => 1/3,
            ],
            [
                'kode_kriteria_1' => 'C3',
                'kode_kriteria_2' => 'C5',
                'nilai' => 3,
            ],

            // C4
            [
                'kode_kriteria_1' => 'C4',
                'kode_kriteria_2' => 'C1',
                'nilai' => 1/4,
            ],
            [
                'kode_kriteria_1' => 'C4',
                'kode_kriteria_2' => 'C2',
                'nilai' => 1,
            ],
            [
                'kode_kriteria_1' => 'C4',
                'kode_kriteria_2' => 'C3',
                'nilai' => 3,
            ],
            [
                'kode_kriteria_1' => 'C4',
                'kode_kriteria_2' => 'C4',
                'nilai' => 1,
            ],
            [
                'kode_kriteria_1' => 'C4',
                'kode_kriteria_2' => 'C5',
                'nilai' => 5,
            ],

            // C5
            [
                'kode_kriteria_1' => 'C5',
                'kode_kriteria_2' => 'C1',
                'nilai' => 1/7,
            ],
            [
                'kode_kriteria_1' => 'C5',
                'kode_kriteria_2' => 'C2',
                'nilai' => 1/4,
            ],
            [
                'kode_kriteria_1' => 'C5',
                'kode_kriteria_2' => 'C3',
                'nilai' => 1/3,
            ],
            [
                'kode_kriteria_1' => 'C5',
                'kode_kriteria_2' => 'C4',
                'nilai' => 1/5,
            ],
            [
                'kode_kriteria_1' => 'C5',
                'kode_kriteria_2' => 'C5',
                'nilai' => 1,
            ],
        ]);
    }
}
