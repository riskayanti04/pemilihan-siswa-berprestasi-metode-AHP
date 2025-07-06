<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kriteria;
class SubKriteria extends Model
{
    protected $fillable = [
        'kode', 'nama'
    ];
    protected $table = "sub_kriteria";
    protected $primaryKey = 'kode';
    public $incrementing = false;
    public $timestamps = false;
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class , 'kode_kriteria', 'kode');
    }
}
