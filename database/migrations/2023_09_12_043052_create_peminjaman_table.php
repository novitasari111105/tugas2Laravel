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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_kembali');
            $table->unsignedBigInteger('buku_id');
            $table->unsignedBigInteger('anggota_id');
            $table->unsignedBigInteger('petugas_id');
            $table->foreign('buku_id')->references('id')->on('bukus');
            $table->foreign('anggota-id')->references('id')->on('anggotas');
            $table->foreign('petugas_id')->references('id')->on('petugaas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
