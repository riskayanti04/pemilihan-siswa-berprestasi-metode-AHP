<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SubKriteriaController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\BobotKriteriaController;
use App\Http\Controllers\BobotSubKriteriaController;
use App\Http\Controllers\GrafikController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('admin', AdminController::class);
    Route::resource('kriteria', KriteriaController::class);
    Route::resource('sub_kriteria', SubKriteriaController::class)
        ->only(['show', 'destroy', 'store', 'update']);

    Route::get('/sub_kriteria/{kode_kriteria}/create', [SubKriteriaController::class, 'create'])->name('sub_kriteria.create');
    Route::get('/sub_kriteria/{kode_kriteria}/edit', [SubKriteriaController::class, 'edit'])->name('sub_kriteria.edit');

    Route::get('/hasil/{jurusan}/{kelas}', [HasilController::class, 'hasil'])->name('hasil.index');
    Route::get('/hasil/{jurusan}/{kelas}/cetak', [HasilController::class, 'cetak'])->name('hasil.cetak');

    Route::resource('alternatif', AlternatifController::class);
    Route::resource('bobot_kriteria', BobotKriteriaController::class);
    Route::resource('bobot_sub_kriteria', BobotSubKriteriaController::class);

    Route::get('/hasil', function () {
        return view('perhitungan.jurusan');
    })->name('hasil.jurusan');

    Route::get('/hasil/{jurusan}', [HasilController::class, 'kelas'])->name('hasil.kelas');

    Route::get('/hasil/{jurusan}/{kelas}', [HasilController::class, 'periode'])->name('hasil.periode');

    Route::get('/hasil/{jurusan}/{kelas}/{periode}', [HasilController::class, 'hasil'])->name('hasil.hasil');



    Route::get('/grafik', [GrafikController::class, 'index'])->name('grafik');
    Route::get('/grafik/data', [GrafikController::class, 'getChartData'])->name('grafik.data');
});

