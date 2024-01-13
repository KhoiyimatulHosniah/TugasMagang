<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarhadir extends Model
{
    use HasFactory;

    protected $table = 'daftarhadirs';
    protected $primaryKey = 'id';

    protected $fillable = [
        
        'nama',
        'jenis_kelamin',
        'nama_instansi',
        'jabatan',
        'telepon',
    ];
}