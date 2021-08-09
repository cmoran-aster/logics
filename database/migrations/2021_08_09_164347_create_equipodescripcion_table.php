<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipodescripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_equiposdescripciones', function (Blueprint $table) {
            $table->string('CodigoDescripcionEquipo',5);
            $table->string('DescripcionEquipo',40);
            $table->string('Abreviatura',10);
            $table->integer('CodTamano');
            $table->integer('Reefer');
            $table->integer('HighCube');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_equiposdescripciones');
    }
}
