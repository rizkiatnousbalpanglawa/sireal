<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTahunAnggaranIdInDataRealisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_realisasis', function (Blueprint $table) {
            $table->foreignId('tahun_anggaran_id')->change();

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
            $table->year('tahun_anggaran_id')->change();

        });
    }
}
