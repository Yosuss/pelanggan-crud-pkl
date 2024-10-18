<?php

namespace App\Models;

use App\Http\Controllers\pengaduanController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penggaduanModel extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan'; // Primary key
    protected $fillable = [
        'id_pelanggan',
        'pengaduan',
    ];

    // Relasi dengan model Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(pelangganModel::class, 'id_pelanggan');
    }
}