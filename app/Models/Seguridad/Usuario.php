<?php

namespace App\Models\Seguridad;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use App\Models\Models\Admin\Empresa;

use Illuminate\Support\Facades\Session;

class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $guarded = ['id'];
    protected $table = 'lgs_usuarios';
    protected $fillable = ['id', 'CodEmpresa', 'Usuario', 'Nombres', 'Apellidos', 'Password', 'Nit', 'Email', 'PasswordSat', 'FechaUltimoLogin', 'FechaCreacion', 'Intentos', 'Bloqueado', 'Admin'];


    public function setSession($DatosUsuario){

        $CodEmrpesaE = $DatosUsuario->attributes['CodEmpresa'];
        $empresa = DB::table('lgs_empresa')->where('CodEmpresa',$CodEmrpesaE)->get();
        foreach ($empresa as $Empresas) {
            $CodEmpresaEncontrado = $Empresas->CodEmpresa;
            $NombreEmpresaEncontrado = $Empresas->Empresa;
            $CodigoDomesticoEncontrado = $Empresas->CodigoDomestico;
            $GNLEncontrado = $Empresas->GLN;
            
        }

        session(
                ['CodEmpresa' => $CodEmpresaEncontrado,
                 'EmpresaNombre' => $NombreEmpresaEncontrado,
                 'CodDomestico' => $CodigoDomesticoEncontrado,
                 'GLNsession' => $GNLEncontrado
                ]
        );
   }
}



 
