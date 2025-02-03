<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class auditor extends Model
{
    /** @use HasFactory<\Database\Factories\AuditorFactory> */
    use HasFactory;

    protected $table = 'auditors';
    protected $fillable = ['nama'];

    public function internal_audit(): HasMany
    {
        return $this->hasMany(nasabahAudit::class);
    }
}
