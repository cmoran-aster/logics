<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class costos extends Model
{
    protected $table = "exp_cargos";
    protected $fillable = [ 'CodExpediente', 'FechaCargo', 'CodigoTipoCargo', 'Descripcion', 'Moneda',
                            'Cargo', 'UsuarioCreacion', 'UsuarioMod', 'Estado'];
    protected $guarded = ['CodCargo'];// que campos laravel no dejara modificar
    public $timestamps = true;//para que no llene los campos timestamps
}
