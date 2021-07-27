<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaEmpresas extends Migration
{
    public function up()
    {
        Schema::create('lgs_empresa', function (Blueprint $table) {

            $table->id('id');
            $table->longText('Empresa');
            $table->string('FormaPago',300)->nullable($value = true);
            $table->string('CodigoDomestico',3);
            $table->string('GLN',13);
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
        Schema::dropIfExists('lgs_empresa');
    }
}
