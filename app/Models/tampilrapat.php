<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tampilrapat extends Model
{
    use HasFactory;
    protected $table = 'kegiatanrapats'; 
    protected $fillable = ['kegiatan','hari','tanggal', 'waktu'];
}

