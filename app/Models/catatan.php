<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'waktu',
        'lokasi',
        'suhutubuh',
    ];
}