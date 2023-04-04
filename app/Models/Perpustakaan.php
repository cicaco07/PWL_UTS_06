<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    //use HasFactory;
    protected $table = "perpustakaan";
    public $timestamps = false;
    protected $primaryKey = 'kode_buku';

    protected $fillable = [
        'kode_buku',
        'judul',
        'pengarang',
        'jenis_buku',
        'harga',
        'qty',
    ];
}
