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
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->string('sertifikat_forum');
            $table->string('id_penelitian');
            $table->string('judul');
            $table->string('lampiran')->nullable();
            $table->string('nama_forum');
            $table->string('institusi_penyelenggara');
            $table->date('waktu_pelaksanaan_awal');
            $table->date('waktu_pelaksanaan_akhir');
            $table->string('tempat');
            $table->string('status');
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
        Schema::dropIfExists('forums');
    }
};
