<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = "cl_clientes";
    protected $fillable = ['CodEmpresa', 'Cliente', 'Nit', 'EmailPlanta', 'DirOficina', 'CodigoPais', 
                           'CodigoLugar', 'DiasCredito', 'TelPlanta', 'Agente', 'Proveedor', 'UsuarioCreacion', 'UsuarioMod', 'Estado', 'created_at', 'updated_at'];
    protected $guarded = ['CodCliente'];// que campos laravel no dejara modificar
   //public $timestamps = false;//para que no llene los campos timestamps
}
