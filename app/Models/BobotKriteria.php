<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubKriteria;
class BobotKriteria extends Model
{
    protected $fillable = [
        'kode_kriteria_1', 'kondisi', 'nilai', 'kode_kriteria_2'
    ];
    protected $table = "bobot_kriteria";
    public $timestamps = false;
    public function sub_kriteria()
    {
        return $this->hasMany(SubKriteria::class , 'kode_kriteria', 'kode');
    }
}
