<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View_kontak extends Model
{
    use HasFactory;
    protected $table = 'view_kontak';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul_sambutan',
        'penjelasan_view',
        'penjelasan_treveling',
    ];
}
