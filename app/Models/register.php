<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class register extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'registers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'username',
        'email',
        'jenis_kelamin',
        'jabatan',
        'notlp',
        'password',
        'id_OPD',
    ];
    protected $hidden = [
        'password',
    ];
    protected $with = ['opd'];

    public function opd(): BelongsTo
    {
        return $this->belongsTo(opd::class, 'id_OPD');
    }
}
