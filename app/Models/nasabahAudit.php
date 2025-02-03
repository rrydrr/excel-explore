<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class nasabahAudit extends Model
{
    /** @use HasFactory<\Database\Factories\NasabahAuditFactory> */
    use HasFactory;

    protected $table = 'nasabah_audits';
    protected $fillable = [
        'noSbg',
        'nama',
        'overdue',
        'deskripsi',
        'beratKotor',
        'beratBatu',
        'beratEmas',
        'karatVol',
        'karatDensity',
        'karatAK',
        'karatBJ',
    ];

    public function internalAudit(): HasMany
    {
        return $this->hasMany(internalAudit::class);
    }
}
