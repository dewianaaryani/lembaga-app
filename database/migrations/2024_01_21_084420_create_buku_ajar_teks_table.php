<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_ajar_teks', function (Blueprint $table) {
            $table->id();
            $table->string('sertifikat_buku_ajar');
            $table->string('id_penelitian');
            $table->string('penerbit');
            $table->string('lampiran')->nullable(); // Assuming it's a file path or storage reference
            $table->string('judul');
            $table->string('isbn');
            $table->integer('jumlah_halaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku_ajar_teks');
    }
};
