<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailAngsuranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_angsuran', function (Blueprint $table) {
            $table->increments('id_angsuran');
            $table->string('tgl_jatuh_tempo');
             $table->string('besar_angsuran');
              $table->string('ket');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_angsuran');
    }
}
