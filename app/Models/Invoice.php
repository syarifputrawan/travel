<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Treveling;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoice';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'destinasi',
        'paket',
        'durasi',
        'tanggal',
        'total',
    ];

    public function destinasi(){
        return $this->hasOne(Treveling::class,'destinasi', 'nama_tempat');
    }
}
