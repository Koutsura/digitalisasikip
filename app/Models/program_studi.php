<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program_studi extends Model
{
    use HasFactory;
    protected $table = 'program_studi';
    protected $primaryKey = 'kode_prodi';
    protected $fillable = [
        'kode_prodi',
        'nama_prodi',
        'akreditasi_prodi',
        'ukt_spp',
        'created_at',
        'updated_at'
    ];


}
