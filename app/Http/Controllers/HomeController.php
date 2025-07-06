<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HasilController;
use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Ambil semua jurusan dan kelas unik dari tabel alternatif
        $jurusans = Alternatif::select('jurusan')->distinct()->pluck('jurusan')->toArray();
        $kelass = Alternatif::select('kelas')->distinct()->pluck('kelas')->toArray();

        // Ambil periode terakhir dari nilai_alternatif (format: YYYY-MM)
        $periodes = DB::table('nilai_alternatif')
            ->selectRaw("DATE_FORMAT(created_at, '%Y-%m') as periode")
            ->distinct()
            ->orderBy('periode', 'desc')
            ->pluck('periode')
            ->toArray();

        $periodeTerakhir = $periodes[0] ?? null;


        $decisionMetrics = [];

        foreach ($jurusans as $jurusan) {
            foreach ($kelass as $kelas) {
                // Panggil hitungHasil untuk tiap kombinasi jurusan dan kelas
                $hasilController = new HasilController();
                $hasil = $hasilController->hitungHasil($jurusan, $kelas, $periodeTerakhir);

                if (isset($hasil['decisionMetrics'])) {
                    // Gunakan key kombinasi untuk membedakan
                    $key = $jurusan . '-' . $kelas;
                    $decisionMetrics[$key] = $hasil['decisionMetrics'];
                }
            }
        }
        $kriterias = Kriteria::all();
        // dd($decisionMetrics);
        return view('home', [
            'decision_metric' => $decisionMetrics,
            'kriterias' =>$kriterias,
        ]);
    }
}
