<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sedikit extends Model
{
    use HasFactory;
    protected $table = 'sedikit';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul_kami',
        'deskripsi_singkat',
        'gambar',
    ];
}
