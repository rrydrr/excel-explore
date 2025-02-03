<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class internalAudit extends Model
{
    /** @use HasFactory<\Database\Factories\InternalAuditFactory> */
    use HasFactory;

    protected $table = 'internal_audits';
    protected $fillable = [
        'idNasabahAudit',
        'idAuditor',
        'beratKotor',
        'beratBatu',
        'beratEmas',
        'karatVol',
        'karatDensity',
        'karatAK',
        'karatBJ',
    ];

    public function nasabahAudit(): HasOne
    {
        return $this->hasOne(nasabahAudit::class);
    }
    public function auditor(): HasOne
    {
        return $this->hasOne(auditor::class);
    }
}
