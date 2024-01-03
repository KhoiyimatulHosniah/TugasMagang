<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tambahjadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'bidang',
        'tanggal_berangkat',
        'tanggal_pulang',
        'tujuan',
        'no_telp',
    ];
}
