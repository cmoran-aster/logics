<?php

namespace App\Models\Seguridad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $guarded = ['CodUsuario'];
    protected $table = 'lgs_usuarios';
    protected $fillable = [
        
        'CodUsuario', 
        'CodEmpresa', 
        'Usuario', 
        'Nombres', 
        'Apellidos', 
        'Password', 
        'Nit', 
        'Email', 
        'PasswordSat', 
        'FechaUltimoLogin', 
        'FechaCreacion', 
        'Intentos', 
        'Bloqueado', 
        'Admin',
        
    ];
}
