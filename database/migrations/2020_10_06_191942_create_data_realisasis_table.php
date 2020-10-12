<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRealisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_realisasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skpd_id');
            $table->foreignId('pimpinanSkpd_id');
            $table->foreignId('pptk_id');
            $table->year('tahun_anggaran');
            $table->text('kegiatan');
            $table->bigInteger('nilai_pagu');
            $table->bigInteger('nilai_hps');
            $table->bigInteger('nilai_kontrak');
            $table->foreignId('metode_id');
            $table->double('jumlah_realisasi_keuangan');
            $table->double('jumlah_realisasi_fisik');
            $table->string('perusahaan_penyedia');
            $table->string('pimpinan_penyedia');
            $table->string('keterangan');
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
        Schema::dropIfExists('data_realisasis');
    }
}
