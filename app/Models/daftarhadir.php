<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class daftarhadir extends Model
{
    use HasFactory;

    protected $table = 'daftarhadirs';
    protected $primaryKey = 'id';

    protected $fillable = [
        
        'nama',
        'jenis_kelamin',
        'id_OPD',
        'jabatan',
        'no_telp',
    ];
    protected $with = ['opd'];

    public function opd(): BelongsTo
    {
        return $this->belongsTo(opd::class, 'id_OPD');
    }
}