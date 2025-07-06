<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubKriteria;
use App\Models\BobotKriteria;
class Kriteria extends Model
{
    protected $fillable = [
        'kode', 'nama'
    ];
    protected $table = "kriteria";
    protected $primaryKey = 'kode';
    public $incrementing = false;
    public function sub_kriteria()
    {
        return $this->hasMany(SubKriteria::class , 'kode_kriteria', 'kode');
    }
    public function bobot_kriteria()
    {
        return $this->hasMany(BobotKriteria::class , 'kode_kriteria_1', 'kode');
    }
}
