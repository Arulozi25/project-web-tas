<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    
    protected $fillable = [ 
        'nama',
        'harga',
        'liga_id',
        'is_ready',
        'jenis',
        'berat',
        'gambar'
    ];    
}