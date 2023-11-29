<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tamu extends Model
{
    use HasFactory;

    protected $table = 'tamus';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tanggal',
        'nama_instansi',
        'tujuan',
        'no_telp',
    ];
}
