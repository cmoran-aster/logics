<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class costos extends Model
{
    protected $table = "exp_cargos";
    protected $fillable = [ 'CodExpediente', 'Dolares', 'CtAjena', 'FechaCargo', 'CodigoTipoCargo', 'Descripcion', 'Moneda',
                            'Cargo', 'TipoCambio', 'UsuarioCreacion', 'UsuarioMod', 'Estado'];
    protected $guarded = ['CodCargo'];// que campos laravel no dejara modificar
    public $timestamps = true;//para que no llene los campos timestamps
}
