<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelangganModel extends Model
{
    use HasFactory;
    protected $table = 'pelanggan'; // Nama tabel
    protected $primaryKey = 'id_pelanggan'; // Primary key

    protected $fillable = [
        'cabang',
        'nama',
        'alamat',
        'no_telepon',
        'kelompok_pelanggan',
    ];

    // Relasi dengan model Pengaduan
    public function pengaduan()
    {
        return $this->hasMany(penggaduanModel::class, 'id_pelanggan');
    }
}