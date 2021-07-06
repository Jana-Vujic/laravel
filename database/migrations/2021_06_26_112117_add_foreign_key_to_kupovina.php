<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToKupovina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kupovina', function (Blueprint $table) {
            $table->unsignedBigInteger('proizvod_id');
            $table->foreign('proizvod_id')->references('id')->on('proizvod')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kupovina', function (Blueprint $table) {
            $table->dropForeign('kupovina_proizvod_id_foreign');
        });
    }
}
