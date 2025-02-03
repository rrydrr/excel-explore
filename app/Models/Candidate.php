<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    /** @use HasFactory<\Database\Factories\CandidateFactory> */
    use HasFactory;

    protected $table = 'Candidates';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'netWorth',
        'income',
        'debt',
        'creditScore'
    ];
}
