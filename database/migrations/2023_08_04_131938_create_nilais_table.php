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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai');
            // $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('mapel_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('guru_id')->constrained()->cascadeOnDelete();
            $table->datetime('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
