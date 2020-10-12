<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTahunAnggaranInDataRealisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_realisasis', function (Blueprint $table) {
            $table->renameColumn('tahun_anggaran','tahun_anggaran_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_realisasis', function (Blueprint $table) {
            $table->renameColumn('tahun_anggaran_id','tahun_anggaran');
          
        });
    }
}
