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
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nip');
            $table->string('nama');
            $table->string('alamat');
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete()->after('id');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropForeign(['user_id']);
        $table->dropForeign(['user_id']);
        Schema::dropIfExists('gurus');
    }
};
