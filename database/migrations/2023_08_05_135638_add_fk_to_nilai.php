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
        Schema::table('nilais', function (Blueprint $table) {
            $table->foreignId('siswa_id')->nullable()->constrained()->cascadeOnDelete()->after('id');
            $table->foreignId('guru_id')->nullable()->constrained()->cascadeOnDelete()->after('id');
            $table->foreignId('mapel_id')->nullable()->constrained()->cascadeOnDelete()->after('id');
            $table->foreignId('ruangan_id')->nullable()->constrained()->cascadeOnDelete()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nilais', function (Blueprint $table) {
            $table->dropForeign(['guru_id']);
             $table->dropColumn(['guru_id']);
             $table->dropForeign(['siswa_id']);
             $table->dropColumn(['siswa_id']);
             $table->dropForeign(['mapel_id']);
             $table->dropColumn(['mapel_id']);
             $table->dropForeign(['ruangan_id']);
             $table->dropColumn(['ruangan_id']);
        });
    }
};
