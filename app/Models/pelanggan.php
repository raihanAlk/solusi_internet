<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $fillable = [
        'nama_pelanggan',
        'no_telp',
        'paket_internet_id',
        'alamat',
    ];
    public function PaketInternet()
    {
        return $this->belongsTo(PaketInternet::class);  
    }
}
