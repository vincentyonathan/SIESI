<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencapaian extends Model
{
    use HasFactory;
    public $table = "pencapaian";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'id_kegiatan',
        'nama_pokok',
        'deskripsi',
        'bobot',
    ];
}
