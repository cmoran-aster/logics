<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGastostipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_c_gastostipos', function (Blueprint $table) {
            $table->id('CodTipoGasto');
            $table->integer('CodEmpresa');
            $table->string('CodigoTipoGasto',5);
            $table->integer('CodNomenclatura');
            $table->string('TipoGasto',50);
            $table->integer('Estado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_c_gastostipos');
    }
}
