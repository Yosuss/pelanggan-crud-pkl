<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduanModel extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan'; // Primary key
    protected $fillable = [
        'pengaduan',
        'update_pengaduan',
        'pegawai',

    ];

    public function pelanggan()
    {
        return $this->belongsTo(pelangganModel::class, 'id_pelanggan'); // Foreign key yang menghubungkan ke tabel pelanggan
    }
}