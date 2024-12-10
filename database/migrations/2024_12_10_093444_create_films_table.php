<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->integer('tahun');
            $table->string('genre');
            $table->string('durasi');
            $table->decimal('rating', 3, 1);
            $table->string('referensi');
            $table->string('sutradara');
            $table->text('sinopsis');
            $table->string('poster')->nullable();
            $table->string('kategori_usia');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('films');
    }
}
