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
        Schema::create('berita_gereja', function (Blueprint $table) {
            $table->id('id_berita');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama', 50);
            $table->binary('gambar')->nullable();
            $table->string('deskripsi', 255);
            $table->date('tanggal_publikasi');
            $table->timestamps();
        
            $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_gereja');
    }
};
