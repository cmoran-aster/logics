<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $table = "lgs_expedientes";
    protected $fillable = [ 'CodEmpresa','NumExpediente', 'AnoExpediente', 'CodEmbarcador', 'CodigoTipoServicio', 'CodigoPaisOrigen', 'CodigoPuertoOrigen', 'CodigoPaisDestino', 
                            'CodigoPuertoDestino', 'LugarOrigen', 'LugarDestino', 'Commodity', 'CodNaviera', 'CodAgente', 'CodConsignatario', 'NumBooking', 'NumBL', 
                            'NumBLMaster', 'NombreBarco', 'AnoManifiesto', 'NumManifiesto', 'NumViaje', 'FechaEta', 'Descripcion', 'Marcas', 'PesoBruto', 'CantEquipos', 
                            'CodigoDescripcionEquipo', 'CodigoTipoCobro', 'Cantidad', 'CodigoTipoEmbalaje', 'FechaValidezTarifa', 'Temperatura', 'FechaVenta', 
                            'CodigoLugarPresentacionBL', 'FechaPresentacionBL', 'CodigoLugarImpresionBL', 'FechaImpresionBL', 'Embarcador1', 'Embarcador2', 'Embarcador3', 
                            'Embarcador4', 'Embarcador5', 'NitConsignatario', 'Consignatario1', 'Consignatario2', 'Consignatario3', 'Consignatario4', 
                            'Consignatario5', 'Notificado1', 'Notificado2', 'Notificado3', 'Notificado4', 'Notificado5', 'CodFactura', 'UsuarioCrea', 
                            'UsuarioMod', 'Estado', 'created_at', 'updated_at'];
    protected $guarded = ['CodExpediente'];// que campos laravel no dejara modificar
   //public $timestamps = false;//para que no llene los campos timestamps
}
