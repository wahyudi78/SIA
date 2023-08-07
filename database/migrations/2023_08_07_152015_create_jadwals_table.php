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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('mapel_id')->nullable()->constrained()->cascadeOnDelete()->after('id');
            $table->string('hari');
            $table->time('mulai');
            $table->time('selesai');
            $table->foreignId('ruangan_id')->nullable()->constrained()->cascadeOnDelete()->after('id');
            $table->integer('kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropForeign(['mapel_id']);
        $table->dropColumn(['mapel_id']);
        $table->dropForeign(['ruangan_id']);
        $table->dropColumn(['ruangan_id']);
        Schema::dropIfExists('jadwals');
    }
};
