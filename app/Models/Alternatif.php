<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\NilaiAlternatif;
class Alternatif extends Model
{
    protected $fillable = [
        'nisn', 'nama'
    ];
    protected $table = "alternatif";
    protected $primaryKey = 'nisn';
    public $incrementing = false;
    public function nilai_alternatif()
    {
        return $this->hasMany(NilaiAlternatif::class, 'nisn', 'nisn');
    }
}
