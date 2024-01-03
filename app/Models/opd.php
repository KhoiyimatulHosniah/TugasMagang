<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class opd extends Model
{
    use HasFactory;

    protected $table = 'opd';
    protected $primaryKey = 'id_OPD';

    protected $fillable = [
        'nama_instansi',
    ];

    
}
