<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'totalPemasukan',
        'hargaModal',
        'keuntungan',
        'status',
        'details',
        'description'
    ];

    protected $casts = [
        'details' => 'array'
    ];  
}
