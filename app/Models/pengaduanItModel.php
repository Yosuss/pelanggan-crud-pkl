<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduanItModel extends Model
{
    use HasFactory;
    protected $table = 'pengaduan_it';
    protected $primaryKey = 'id_pengaduan_it'; // Primary key
    protected $fillable = [
        'nama',
        'bagian',
        'pengaduan_it',
        'update_pengaduan_it',
    ];
}