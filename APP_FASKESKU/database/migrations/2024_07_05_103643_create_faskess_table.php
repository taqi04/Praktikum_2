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
        Schema::create('faskess', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_pengelola');
            $table->string('alamat');
            $table->string('website');
            $table->string('email');
            $table->foreignId('kabkota_id')->constrained('kabkotas');
            $table->integer('rating');
            $table->double('latitude');
            $table->double('longitude');
            $table->foreignId('jenis_faskes_id')->constrained('jenis_faskess');
            $table->foreignId('kategori_id')->constrained('kategoris');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faskess');
    }
};
