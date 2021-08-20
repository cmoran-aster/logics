<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    protected $table = "exp_equipos";
    protected $fillable = [ 'CodExpediente', 'Identificacion', 'CodTamano', 'Reefer', 'HighCube',
                            'Flatrack', 'OpenTop', 'Peso', 'CodigoDescripcionEquipo', 'NumMarchamo1',
                            'NumMarchamo2', 'UsuarioCreacion', 'UsuarioMod', 'Estado',
                            'UsuarioCreacion', 'UsuarioMod', 'Estado', 'created_at', 'updated_at'];
    protected $guarded = ['CodEquipo'];// que campos laravel no dejara modificar
   //public $timestamps = false;//para que no llene los campos timestamps
}
