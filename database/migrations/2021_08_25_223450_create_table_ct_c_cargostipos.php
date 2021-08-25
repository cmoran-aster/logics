<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCtCCargostipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_c_cargostipos', function (Blueprint $table) {
            $table->id('CodTipoCargo');
            $table->integer('CodEmpresa');
            $table->integer('CodNomenclatura');
            $table->string('CodigoTipoCargo');
            $table->string('TipoCargo',50);
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
        Schema::dropIfExists('ct_c_cargostipos');
    }
}
