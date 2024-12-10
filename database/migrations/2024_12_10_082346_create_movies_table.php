<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->integer('tahun');
            $table->string('genre');
            $table->string('durasi');
            $table->decimal('rating', 2, 1); // Format desimal untuk rating
            $table->string('referensi');
            $table->string('sutradara');
            $table->text('sinopsis');
            $table->string('poster')->nullable(); // Poster bisa null jika tidak diupload
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
