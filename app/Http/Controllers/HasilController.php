<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiAlternatif;
use App\Models\Alternatif;
use App\Models\Kriteria;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\HasilExport;

class HasilController extends BobotSubKriteriaController
{
    public function hasil($jurusan, $kelas, $periode)
    {
        $data = $this->hitungHasil($jurusan, $kelas, $periode);
        return view('perhitungan.hasil', $data);
    }

    public function kelas($jurusan)
    {
        return view('perhitungan.kelas', ['jurusan' => $jurusan]);
    }

    public function periode($jurusan, $kelas)
    {
        $periodes = \DB::table('nilai_alternatif')
        ->selectRaw("DATE_FORMAT(created_at, '%Y-%m') as periode")
        ->distinct()
        ->orderBy('periode', 'desc')
        ->pluck('periode')
        ->toArray();
        return view('perhitungan.periode', compact('jurusan', 'kelas', 'periodes'));
    }

    public function hitungHasil($jurusan, $kelas, $periode)
    {
        [$year, $month] = explode('-', $periode);

        $alternatif = Alternatif::with(['nilai_alternatif' => function ($query) use ($year, $month) {
                $query->whereYear('created_at', $year)
                    ->whereMonth('created_at', $month);
            }, 'nilai_alternatif.sub_kriteria'])
            ->where('jurusan', $jurusan)
            ->where('kelas', $kelas)
            ->whereHas('nilai_alternatif', function ($query) use ($year, $month) {
                $query->whereYear('created_at', $year)
                    ->whereMonth('created_at', $month);
            })
            ->get();
        $bobot_kriteria = $this->bobot_kriteria();
        $bobot_sub_kriteria = null;
        $temp = null;
        $m_1 = [];
        $m_2 = [];
        $m_0 = [];
        $nilai_alternatif = [];
        $nilai_alternatif_2 = [];
        $perangkingan = [];
        $perangkingan_temp = [];
        $m_1['kriteria'] = $bobot_kriteria['bobot_m_2'];
        foreach ($m_1['kriteria'] as $key => $value) {
            $bobot_sub_kriteria = $this->bobot_sub_kriteria($key);
            $x = 0;
            foreach ($bobot_sub_kriteria['bobot_m_2'] as $key2 => $value2) {
                $m_1['sub_kriteria'][$x][$key2]= $value2;
                $m_2[$key][$key2]= $value2;
                $m_0[$key2] = $value2;
                $x = $x + 1;
            }
        }
        foreach ($alternatif as $key => $value) {
            $i = 0;
            foreach ($value->nilai_alternatif as $key2 => $value2) {
                if ($i == 0) {
                    $nilai_alternatif[$key]['nisn'] = $value->nisn;
                    $nilai_alternatif[$key]['nama'] = $value->nama;
                }
                $nilai_alternatif[$key]['nilai'][$value2->sub_kriteria->kode_kriteria][$value2->kode_sub_kriteria] = $m_0[$value2->kode_sub_kriteria];
                $i++;
            }
        }
        $nilai_alternatif_2 = $nilai_alternatif;
        foreach ($nilai_alternatif as $key => $value) {
            $total = 0;
            foreach ($value['nilai'] as $key2 => $value2) {
                $perkalian = 0;
                foreach ($value2 as $key3 => $value3) {
                    $perkalian = $value3 * $m_1['kriteria'][$key2];
                    $nilai_alternatif_2[$key]['nilai'][$key2][$key3] = $perkalian;
                    $total = $total+$perkalian;
                }
            }
            $nilai_alternatif_2[$key]['hasil'] = $total;
            $perangkingan_temp[$key] = $total;
        }
        $perangkingan = $nilai_alternatif_2;
        array_multisort($perangkingan_temp, SORT_DESC, $perangkingan);
        $n = 1;
        foreach ($perangkingan as $key => $value) {
            $perangkingan[$key]['rangking'] = $n;
            $n++;
        }

        $bar_chart_per_kriteria = [];
        $radar_chart_per_kriteria = [];

        foreach ($nilai_alternatif as $key => $value) {
            foreach ($value['nilai'] as $kriteria => $subkriteria) {
                $sum = array_sum($subkriteria);
                $bar_chart_per_kriteria[$kriteria][] = [
                    'nama' => $value['nama'],
                    'nilai' => $sum
                ];
                $radar_chart_per_kriteria[$kriteria][] = [
                    'nama' => $value['nama'],
                    'nilai' => $sum
                ];
            }
        }

        $sensitivitas = [];

        foreach ($bobot_kriteria['bobot_m_2'] as $kode_kriteria => $original_bobot) {
            $perubahan = 0.1; // naik/turun 10%

            // Bobot naik
            $bobot_kriteria_naik = $bobot_kriteria['bobot_m_2'];
            $bobot_kriteria_naik[$kode_kriteria] = min(1, $original_bobot + $perubahan);

            // Normalisasi ulang jika total > 1
            $total = array_sum($bobot_kriteria_naik);
            foreach ($bobot_kriteria_naik as $k => $v) {
                $bobot_kriteria_naik[$k] = $v / $total;
            }

            // Hitung ulang nilai_alternatif_2 dengan bobot naik
            $nilai_sensitivitas = $nilai_alternatif;
            foreach ($nilai_sensitivitas as $key => $value) {
                $total = 0;
                foreach ($value['nilai'] as $key2 => $value2) {
                    foreach ($value2 as $key3 => $value3) {
                        $nilai_sensitivitas[$key]['nilai'][$key2][$key3] = $value3 * ($bobot_kriteria_naik[$key2] ?? 0);
                        $total += $nilai_sensitivitas[$key]['nilai'][$key2][$key3];
                    }
                }
                $nilai_sensitivitas[$key]['hasil'] = $total;
            }

            // Simpan hasil sensitivitas
            usort($nilai_sensitivitas, fn($a, $b) => $b['hasil'] <=> $a['hasil']);

            $sensitivitas[$kode_kriteria] = collect($nilai_sensitivitas)->map(function ($item, $i) {
                return [
                    'nama' => $item['nama'],
                    'hasil' => round($item['hasil'], 4),
                    'rangking' => $i + 1
                ];
            })->toArray();
        }

        $kriterias = Kriteria::all();
        $decision_metric = [];
        $ranking_awal = collect($perangkingan)->pluck('nama')->toArray();
        $total_awal = array_sum($bobot_kriteria['bobot_m_2']);

        foreach ($sensitivitas as $kode_kriteria => $hasil_sensitivitas) {
            $bobot_awal = $bobot_kriteria['bobot_m_2'][$kode_kriteria];
            $bobot_ubah = min(1, $bobot_awal + 0.1);
            $total_baru = $total_awal - $bobot_awal + $bobot_ubah;
            $bobot_uji = $total_baru > 0 ? round($bobot_ubah / $total_baru, 4) : 0;

            $ranking_baru = collect($hasil_sensitivitas)->pluck('nama')->toArray();
            $berubah = $ranking_awal !== $ranking_baru;

            $decision_metric[] = [
                'kode_kriteria' => $kode_kriteria,
                'nama_kriteria' => optional($kriterias->where('kode_kriteria', $kode_kriteria)->first())->nama_kriteria ?? $kode_kriteria,
                'bobot_awal' => round($bobot_awal, 4),
                'bobot_uji' => $bobot_uji,
                'ranking_awal' => $ranking_awal,
                'ranking_baru' => $ranking_baru,
                'berubah' => $berubah ? 'Ya' : 'Tidak',
            ];
        }

        $groupedDecisionMetrics = [];

        foreach ($alternatif as $alt) {
            $jurusan = $alt->jurusan;
            $kelas = $alt->kelas;

            $groupKey = $jurusan . '-' . $kelas;

            if (!isset($groupedDecisionMetrics[$groupKey])) {
                $groupedDecisionMetrics[$groupKey] = [];
            }

            $groupedDecisionMetrics[$groupKey] = $decision_metric; // Asumsinya per jurusan/kelas sama decision_metric
        }



        return [
            'nilai_sub_kriteria' => $m_0,
            'hasil_1' => $m_1,
            'hasil_2' => $m_2,
            'nilai_alternatif' => $nilai_alternatif,
            'perangkingan' => $perangkingan,
            'sensitivitas' => $sensitivitas,
            'bar_chart_per_kriteria' => $bar_chart_per_kriteria,
            'radar_chart_per_kriteria' => $radar_chart_per_kriteria,
            'kriterias' => $kriterias,
            'decision_metric' => $decision_metric,
            'decisionMetrics' => $groupedDecisionMetrics,
        ];
    }
    public function cetak($jurusan, $kelas){
        $data = $this->hasil($jurusan, $kelas);
        $perangkingan = $data['perangkingan'];
        $hasil_1 = $data['hasil_1'];
        return (new HasilExport ($perangkingan, $hasil_1))->download('hasil-perangkingan.xlsx');
    }
}
