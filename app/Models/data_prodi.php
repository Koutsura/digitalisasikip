<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_prodi extends Model
{
    use HasFactory;
    protected $table = 'data_prodi';
    protected $primaryKey = 'kode_prodi';
    protected $fillable = [
        'kode_prodi',
        'nama_prodi',
        'kode_pt',
        'nama_pt',
        'created_at',
        'updated_at'
    ];
}
