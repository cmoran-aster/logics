<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLugarpresentacionblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_lugarespresentacionbl', function (Blueprint $table) {
            $table->string('CodigoLugarPresentacionBL',10)->primary();
            $table->string('LugarPresentacionBL',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_lugarespresentacionbl');
    }
}
