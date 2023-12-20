<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasFormatRupiah;
use App\Models\Invoice;

class Treveling extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $table = 'treveling';
    protected $primaryKey = 'id';
    protected $fillable = [
        'gambar',
        'nama_tempat',
        'penjelasan_singkat',
        'harga',
    ];

    public function invoice(){
        return $this->belongsTo(Invoice::class, 'nama_tempat', 'destinasi');
    }
}
