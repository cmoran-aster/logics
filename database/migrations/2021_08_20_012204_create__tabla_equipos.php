<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaEquipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exp_equipos', function (Blueprint $table) {
            $table->id('CodEquipo');
            $table->integer('CodExpediente');
            $table->string('Identificacion',20);
            $table->integer('CodTamano')->nullable($value = true);
            $table->tinyInteger('Reefer')->nullable($value = true);
            $table->tinyInteger('HighCube')->nullable($value = true);
            $table->tinyInteger('Flatrack')->nullable($value = true);
            $table->tinyInteger('OpenTop')->nullable($value = true);
            $table->decimal('Peso',10,2);
            $table->string('CodigoDescripcionEquipo',4);
            $table->string('NumMarchamo1',20)->nullable($value = true);
            $table->string('NumMarchamo2',20)->nullable($value = true);
            $table->string('UsuarioCreacion',20);
            $table->string('UsuarioMod',20)->nullable($value = true);
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
        Schema::dropIfExists('exp_equipos');
    }
}
