<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSobaCenaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soba_cena', function (Blueprint $table) {
            $table->increments('id_soba_cena');
            $table->date('date');
            $table->foreignId('id_cena')->index();
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
        Schema::dropIfExists('soba_cena');
    }
}
