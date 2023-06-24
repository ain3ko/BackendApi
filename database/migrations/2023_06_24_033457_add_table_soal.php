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
        Schema::create('tabel_soal', function (Blueprint $table) {
            $table->id();
            $table->string('kode_soal', 50)->required();
            $table->string('nama_soal', 50)->required();
            $table->unsignedBigInteger('matkul_id');
            $table->foreign('matkul_id')->references('id')->on('tabel_matkul')->onDelete('restrict');
            $table->string('tahun_soal');
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
        Schema::dropIfExists('tabel_soal');
    }
};
