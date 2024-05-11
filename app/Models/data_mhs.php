<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_mhs extends Model
{
    use HasFactory;

    protected $table = 'data_mhs';
    protected $primaryKey = 'nim_mhs';
    protected $fillable = [
        'nim_mhs',
        'nama_mhs',
        'tempatlahir_mhs',
        'tanggallahir_mhs',
        'jumlah_semaktif',
        'jumlah_semcuti',
        'kode_prodi',
        'nama_prodi',
        'created_at',
        'updated_at'
    ];
}
