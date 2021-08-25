<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gastos extends Model
{
    protected $table = "exp_gastos";
    protected $fillable = [ 'CodExpediente', 'CodProveedor', 'FechaGasto', 'NumFactura', 'CodigoTipoGasto',
                            'Descripcion', 'Moneda', 'Gasto', 'UsuarioCreacion', 'UsuarioMod',
                            'Estado'];
    protected $guarded = ['CodGasto'];// que campos laravel no dejara modificar
    public $timestamps = true;//para que no llene los campos timestamps
}
