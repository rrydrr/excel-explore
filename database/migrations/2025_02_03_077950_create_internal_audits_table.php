<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('internal_audits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idNasabahAudit');
            $table->unsignedBigInteger('idAuditor');
            $table->double('beratKotor');
            $table->double('beratBatu');
            $table->double('beratEmas');
            $table->integer('karatVol');
            $table->double('karatDensity');
            $table->integer('karatAK');
            $table->integer('karatBJ');
            $table->string('jenisEmas');
            $table->timestamps();

            $table->foreign('idNasabahAudit')->references('id')->on('nasabah_audits')->onDelete('cascade');
            $table->foreign('idAuditor')->references('id')->on('auditors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internal_audits');
    }
};
