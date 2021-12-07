<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    public $table = "kegiatan";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_kegiatan',
        'deskripsi_kegiatan',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
    ];
}