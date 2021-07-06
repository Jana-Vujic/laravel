<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKupovinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kupovinas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("ime_prezime_kupca", 50);
            $table->integer("kolicina");
            $table->double("ukupno");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kupovinas');
    }
}
