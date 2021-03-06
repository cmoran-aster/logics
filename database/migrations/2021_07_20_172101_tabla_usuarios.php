<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lgs_usuarios', function (Blueprint $table) {

            $table->id('id');
            $table->Integer('CodEmpresa');
            $table->string('usuario',25);
            $table->string('Nombres',25);
            $table->string('Apellidos',25);
            $table->longText('password');
            $table->string('Nit',25)->nullable($value = true);
            $table->string('Email',25)->nullable($value = true);
            $table->string('PasswordSat',250);
            $table->dateTime('FechaUltimoLogin')->nullable($value = true);
            $table->dateTime('FechaCreacion');
            $table->Integer('Intentos');
            $table->Integer('Bloqueado');
            $table->Integer('Admin');
            $table->string('UsuarioMod',50)->nullable($value = true);
            $table->dateTime('FechaMod')->nullable($value = true);            
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
        Schema::dropIfExists('lgs_usuarios');
    }
}
