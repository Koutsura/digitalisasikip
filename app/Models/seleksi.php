<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seleksi extends Model
{
    use HasFactory;

    protected $table = 'seleksi';
    protected $primaryKey = 'no_pendaftaran';
    protected $fillable = [
        'no_pendaftaran',
        'seleksi_penetapan',
        'ranking_penetapan',
        'kategori_penetapan',
        'skema_bantuan_pembiayaan',
        'created_at',
        'updated_at'
    ];
}
