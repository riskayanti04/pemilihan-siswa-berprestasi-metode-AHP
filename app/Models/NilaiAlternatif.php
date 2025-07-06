<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubKriteria;
use App\Models\Alternatif;
class NilaiAlternatif extends Model
{
    protected $fillable = [
        'nisn', 'id', 'kode_sub_kriteria'
    ];
    protected $table = "nilai_alternatif";
    public $timestamps = false;

    public function sub_kriteria()
    {
        return $this->belongsTo(SubKriteria::class, 'kode_sub_kriteria', 'kode');
    }
    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'nisn', 'nisn');
    }
}
