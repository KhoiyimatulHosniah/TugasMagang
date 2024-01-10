<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class tamu extends Model
{
    use HasFactory;

    protected $table = 'tamus';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tanggal',
        'tujuan',
        'no_telp',
        'id_OPD',
    ];

    protected $with = ['opd'];

    public function opd(): BelongsTo
    {
        return $this->belongsTo(opd::class, 'id_OPD');
    }
}
