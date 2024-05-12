<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pt extends Model
{
    use HasFactory;
    protected $table = 'data_pt';

    protected $primaryKey = 'kode_pt';
    protected $fillable = [
        'kode_pt',
        'nama_pt',
        'created_at',
        'updated_at'
    ];
}
