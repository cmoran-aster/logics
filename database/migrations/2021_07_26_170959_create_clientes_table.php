<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_clientes', function (Blueprint $table) { 
            $table->id('id');
            $table->integer('CodEmpresa');
            $table->string('Cliente',175);
            $table->string('Nit',20)->nullable($value = true);
            $table->string('EmailPlanta',50);
            $table->string('DirOficina',175)->nullable($value = true);
            $table->string('CodigoPais',3);
            $table->string('CodigoLugar',3)->nullable($value = true);
            $table->integer('DiasCredito')->nullable($value = true);
            $table->string('TelPlanta',20)->nullable($value = true);
            $table->integer('Agente');
            $table->integer('Proveedor');
            $table->string('UsuarioCreacion',50);
            $table->string('UsuarioMod',50)->nullable($value = true);
            $table->integer('Estado');
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
        Schema::dropIfExists('cl_clientes');
    }
}
