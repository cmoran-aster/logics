<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableExpCargos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exp_cargos', function (Blueprint $table) {
            $table->id('CodCargo');
            $table->integer('CodExpediente');
            $table->integer('Dolares')->default(1);
            $table->integer('CtAjena')->default(0);
            $table->datetime('FechaCargo');
            $table->string('CodigoTipoCargo',5);
            $table->string('Descripcion',200);
            $table->string('Moneda',3);
            $table->decimal('Cargo',10,2);
            $table->decimal('TipoCambio',10,5)->nullable($value = true);
            $table->string('UsuarioCreacion',50);
            $table->string('UsuarioMod',50)->nullable($value = true);
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
        Schema::dropIfExists('exp_cargos');
    }
}
