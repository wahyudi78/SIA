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
        Schema::create('absensis', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->foreignId('guru')->references('id')->on('gurus')->onDelete('cascade');
           
            // $table->foreignId('ruang')->references('id')->on('ruangans')->onDelete('cascade');
            // $table->foreignId('mapel')->references('id')->on('mapels')->onDelete('cascade');
            $table->integer('jenis');
            $table->datetime('waktu');
            $table->timestamps();
        });
       
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};
