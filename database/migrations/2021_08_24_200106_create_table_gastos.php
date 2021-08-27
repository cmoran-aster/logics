<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGastos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exp_gastos', function (Blueprint $table) {
            $table->id('CodGasto');
            $table->integer('CodExpediente');
            $table->integer('Dolares')->default(1);
            $table->integer('CtAjena')->default(0);
            $table->integer('CodProveedor');
            $table->dateTime('FechaGasto');
            $table->string('NumFactura',200)->nullable($value = true);
            $table->string('CodigoTipoGasto',5);
            $table->string('Descripcion')->nullable($value = true);
            $table->string('Moneda',3);
            $table->decimal('Gasto',10,2);
            $table->decimal('TipoCambio',10,5)->nullable($value = true);
            $table->string('UsuarioCreacion',25);
            $table->string('UsuarioMod',25)->nullable($value = true);
            $table->integer('Estado')->default(1);
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
        Schema::dropIfExists('exp_gastos');
    }
}
