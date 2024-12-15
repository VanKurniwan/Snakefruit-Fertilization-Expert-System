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
        Schema::create('representasiPengetahuan', function (Blueprint $table) {
            $table->id();
            $table->string('kodeGejala');
            $table->double('p01');
            $table->double('p02');
            $table->double('p03');
            $table->double('p04');
            $table->double('p05');
            $table->double('p06');
            $table->double('p07');
            $table->double('p08');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userdata');
    }
};
