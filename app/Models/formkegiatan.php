<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formkegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatanrapats';
    protected $primaryKey = 'id';

    protected $fillable = [
        
        'kegiatan',
        'hari',
        'tanggal',
        'pukul',
        'tempat',
        'undangan_rapat',
    ];
}
