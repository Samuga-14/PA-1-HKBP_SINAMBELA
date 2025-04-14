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
        Schema::create('warta_jemaat', function (Blueprint $table) {
            $table->id('id_warta_jemaat');
            $table->unsignedBigInteger('id_admin');
            $table->string('judul', 100);
            $table->string('file_pdf', 100)->nullable();
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
        Schema::dropIfExists('warta_jemaat');
    }
};
