<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkenalan extends Model
{
    use HasFactory;
    protected $table = 'perkenalan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'gambar',
        'judul_singkat',
        'penjelasan_singkat',
    ];
}
