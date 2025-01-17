<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    
    protected $table = 'barang';
    
    protected $primaryKey = 'kode_barang';
    
    protected $fillable = [
        'nama_barang', 'unit', 'ukuran', 'warna', 'jenis', 'harga_satuan', 'stok'
    ];
}
