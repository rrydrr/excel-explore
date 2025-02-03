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
        Schema::create('nasabah_audits', function (Blueprint $table) {
            $table->id();
            $table->string('noSbg');
            $table->string('nama');
            $table->integer('overdue');
            $table->string('deskripsi');
            $table->double('beratKotor');
            $table->double('beratBatu');
            $table->double('beratEmas');
            $table->integer('karatVol');
            $table->double('karatDensity');
            $table->integer('karatAK');
            $table->integer('karatBJ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nasabah_audits');
    }
};
