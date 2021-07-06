<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTableNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename("kategorijas", "kategorija");
        Schema::rename("proizvods", "proizvod");
        Schema::rename("kupovinas", "kupovina");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename("kategorija", "kategorijas");
        Schema::rename("proizvod", "proizvods");
        Schema::rename("kupovina", "kupovinas");
    }
}
