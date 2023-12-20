<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'sendiri',
        'frendly',
        'family',
        'satu_hari',
        'dua_hari',
        'tiga_hari',
        'empat_hari',
    ];

}
