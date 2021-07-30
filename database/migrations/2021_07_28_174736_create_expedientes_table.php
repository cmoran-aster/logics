<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lgs_expedientes', function (Blueprint $table) {
            $table->id('CodExpediente');
            $table->integer('CodEmpresa');
            $table->integer('NumExpediente'); 
            $table->integer('AnoExpediente'); 
            $table->integer('CodEmbarcador')->nullable($value = true);
            $table->string('CodigoTipoServicio',1);
            $table->string('CodigoPaisOrigen',2)->nullable($value = true);
            $table->string('CodigoPuertoOrigen',5);
            $table->string('CodigoPaisDestino',2)->nullable($value = true);
            $table->string('CodigoPuertoDestino',5);
            $table->string('LugarOrigen',100)->nullable($value = true);
            $table->string('LugarDestino',100)->nullable($value = true);
            $table->string('Commodity',100)->nullable($value = true);
            $table->integer('CodNaviera')->nullable($value = true);
            $table->integer('CodAgente')->nullable($value = true);
            $table->integer('CodConsignatario')->nullable($value = true);
            $table->string('NumBooking',20)->nullable($value = true);
            $table->string('NumBL',20)->nullable($value = true);
            $table->string('NumBLMaster',20)->nullable($value = true);
            $table->string('NombreBarco',20)->nullable($value = true);
            $table->integer('AnoManifiesto')->nullable($value = true);
            $table->integer('NumManifiesto')->nullable($value = true);
            $table->string('NumViaje',10)->nullable($value = true);
            $table->date('FechaEta')->nullable($value = true);
            $table->longText('Descripcion')->nullable($value = true);
            $table->longText('Marcas')->nullable($value = true);
            $table->decimal('PesoBruto',10,2)->nullable($value = true);
            $table->integer('CantEquipos')->nullable($value = true);
            $table->string('CodigoDescripcionEquipo',5)->nullable($value = true);
            $table->string('CodigoTipoCobro',1)->nullable($value = true);
            $table->integer('Cantidad')->nullable($value = true);
            $table->string('CodigoTipoEmbalaje',2)->nullable($value = true);
            $table->dateTime('FechaValidezTarifa')->nullable($value = true);
            $table->decimal('Temperatura',4,2)->nullable($value = true);
            $table->dateTime('FechaVenta')->nullable($value = true);
            $table->string('CodigoLugarPresentacionBL',5)->nullable($value = true);
            $table->dateTime('FechaPresentacionBL')->nullable($value = true);
            $table->string('CodigoLugarImpresionBL',5)->nullable($value = true);
            $table->dateTime('FechaImpresionBL')->nullable($value = true);
            $table->string('Embarcador1',35)->nullable($value = true);
            $table->string('Embarcador2',35)->nullable($value = true);
            $table->string('Embarcador3',35)->nullable($value = true);
            $table->string('Embarcador4',35)->nullable($value = true);
            $table->string('Embarcador5',35)->nullable($value = true);
            $table->string('NitConsignatario',35)->nullable($value = true);
            $table->string('Consignatario1',35)->nullable($value = true);
            $table->string('Consignatario2',35)->nullable($value = true);
            $table->string('Consignatario3',35)->nullable($value = true);
            $table->string('Consignatario4',35)->nullable($value = true);
            $table->string('Consignatario5',35)->nullable($value = true);
            $table->string('Notificado1',35)->nullable($value = true);
            $table->string('Notificado2',35)->nullable($value = true);
            $table->string('Notificado3',35)->nullable($value = true);
            $table->string('Notificado4',35)->nullable($value = true);
            $table->string('Notificado5',35)->nullable($value = true);
            $table->integer('CodFactura')->nullable($value = true);
            $table->string('UsuarioCrea',20);
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
        Schema::dropIfExists('lgs_expedientes');
    }
}
