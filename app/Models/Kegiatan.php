<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kegiatan', 
        'id_pengguna', 
        'nama_kegiatan', 
        'penanggungjawab',
        'kontak', 
        'anggaran', 
        'status_kegiatan',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
