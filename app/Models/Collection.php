<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 6706223162 - Rafa Suryaputra

class Collection extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi',
    ];

    // protected $guarded = ['id'];
}
