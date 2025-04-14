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
        Schema::create('galeri_kegiatan', function (Blueprint $table) {
            $table->id('id_galeri');
            $table->unsignedBigInteger('id_admin');
            $table->binary('gambar')->nullable();
            $table->string('deskripsi', 255)->nullable();
            $table->binary('video')->nullable();
            $table->date('tanggal_unggah');
            $table->timestamps();
        
            $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri_kegiatan');
    }
};
