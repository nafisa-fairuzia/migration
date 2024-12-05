<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penerbit extends Model
{
    use HasFactory;

    protected $table = 'penerbit';
    protected $fillable = [
        'nama_penerbit', 
        'alamat', 
        'telepon'
    ]; 

   
    public function bukus()
    {
        return $this->hasMany(Buku::class, 'penerbit', 'nama_penerbit');
    }
}
