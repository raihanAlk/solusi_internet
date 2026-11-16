<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketInternet extends Model
{
    protected $fillable = [
        'nama_paket',
        'kecepatan' ,
        'harga',
        'deskripsi',
        'status',
    ];
    public function Pelanggan()
    {
        return $this->hasMany(Pelanggan::class);
    }
}
