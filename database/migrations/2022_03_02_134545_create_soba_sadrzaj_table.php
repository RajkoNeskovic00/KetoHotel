<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSobaSadrzajTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soba_sadrzaj', function (Blueprint $table) {
            $table->increments('id_soba_sad');
            $table->foreignId('id_sadrzaj_smestaj')->index();
            $table->foreignId('id_soba')->index();
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
        Schema::dropIfExists('soba_sadrzaj');
    }
}
