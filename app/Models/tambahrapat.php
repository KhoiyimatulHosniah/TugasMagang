<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tambahrapat extends Model
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
        'id_OPD',
    ];
    protected $with = ['opd'];

    public function opd(): BelongsTo
    {
        return $this->belongsTo(opd::class, 'id_OPD');
    }
}
