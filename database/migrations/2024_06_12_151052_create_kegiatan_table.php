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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id('id_kegiatan')->unique;
            $table->id('id_pengguna');
            $table->string('nama_kegiatan');
            $table->string('penanggungjawab');
            $table->string('kontak');
            $table->decimal('anggaran', 15, 2);
            $table->enum('status_kegiatan', ['terkirim', 'diterima', 'ditolak', 'perlu revisi'])->default('terkirim');
            $table->timestamps();

            $table->foreign('id_pengguna')->references('id')->on('pengguna');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
