<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku'; 

    protected $fillable = [
        'kode', 
        'judul', 
        'penulis', 
        'penerbit', 
        'tahun_terbit', 
        'stok'
    ];

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'penerbit', 'nama_penerbit');
    }
}
