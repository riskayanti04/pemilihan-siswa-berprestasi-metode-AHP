<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\SubKriteria;
use App\Models\NilaiAlternatif;
use Illuminate\Support\Facades\DB;

class GrafikController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::all();
        return view('grafik', compact('kriteria'));
    }

    public function getChartData(Request $request)
    {
        $kodeKriteria = $request->kode_kriteria;
        $periode = $request->periode;

        $subKriteriaIds = SubKriteria::where('kode_kriteria', $kodeKriteria)->pluck('kode');

        $data = DB::table('nilai_alternatif as na')
            ->join('alternatif as a', 'na.nisn', '=', 'a.nisn')
            ->join('sub_kriteria as sk', 'na.kode_sub_kriteria', '=', 'sk.kode')
            ->select('a.nama', DB::raw('SUM(na.id) as skor'))
            ->whereIn('na.kode_sub_kriteria', $subKriteriaIds)
            ->when($periode, function ($query) use ($periode) {
                $query->whereMonth('na.created_at', substr($periode, 5, 2))
                      ->whereYear('na.created_at', substr($periode, 0, 4));
            })
            ->groupBy('a.nama')
            ->get();

        return response()->json($data);
    }
}

