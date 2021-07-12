<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    //use HasFactory;
    protected $table = "tempat_wisatas";
    protected $primaryKey = 'idTW';
    protected $fillable = [
        'idTW',
        'nama',
        'deskripsi',
        'trait',
        'funFact',
        'officialAcc',
        'akomodasi',
        'gambar',
        'gambar2',
        'gambar3',
        'provinsi',
        'tipeWisata',
        'tipeAktivitas',
        'partnerWisata',
     ];
}
