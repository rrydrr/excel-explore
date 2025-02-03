<?php

namespace Database\Seeders;

use App\Models\auditor;
use App\Models\internalAudit;
use App\Models\nasabahAudit;
use Database\Factories\NasabahAuditFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppV2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // nasabahAudit::factory()->count(15)->create();
        auditor::factory()->count(3)->create();
        internalAudit::factory()->count(15)->create();
    }
}
