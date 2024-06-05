<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perguruan_tinggi extends Model
{
    use HasFactory;
    protected $table = 'perguruan_tinggi';

    protected $primaryKey = 'kode_pt';
    protected $fillable = [
        'kode_pt',
        'nama_pt',
        'created_at',
        'updated_at'
    ];
}
