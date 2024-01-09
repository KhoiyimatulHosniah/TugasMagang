<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formnotulensi extends Model
{
    use HasFactory;

    protected $table = 'notulensis';
    protected $primaryKey = 'id';

    protected $fillable = [

        'sidang_rapat',
        'hari',
        'tanggal',
        'jam_panggilan',
        'jam_sidang_rapat',
        'acara',
        'ketua',
        'sekretaris',
        'pencatat',
        'peserta_sidang',
        'Kata_pembuka',
        'pembahasan',
        'keputusan',
    ];
}
