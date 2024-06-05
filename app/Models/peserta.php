<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';

    protected $primaryKey = 'nik';
    protected $fillable = [
    'nik',
    'no_pendaftaran',
    'nisn',
    'npsn',
'email',
'nim',
'no_kk',
'nama_mahasiswa',
'tempat_lahir',
'tanggal_lahir',
'jenis_kelamin',
'alamat',
'no_hp',
'no_kip',
'no_kks',
'asal_sekolah',
'kab_kota_sekolah',
'prov_sekolah',
'nama_ayah',
'pekerjaan_ayah',
'penghasilan_ayah',
'status_ayah',
'nama_ibu',
'pekerjaan_ibu',
'penghasilan_ibu',
'status_ibu',
'jumlah_tanggungan',
'kepemilikan_rumah',
'tahun_perolehan_rumah',
'sumber_listrik',
'luas_tanah',
'luas_bangunan',
'sumber_air',
'mck',
'jarak_pusat_kota_km',

        'created_at',
        'updated_at'
    ];
}
