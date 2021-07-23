<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lgs_usuarios')->insert([
            'CodEmpresa' => 1, 
            'usuario' => "cmoran", 
            'Nombres' => "Christian", 
            'Apellidos' => "Moran", 
            'password' => bcrypt('cmoran21'), 
            'Nit' => "83299491", 
            'Email' => "cmoran@aster.com.gt", 
            'PasswordSat' => "a",
            'FechaCreacion' => now(), 
            'Intentos' => 0, 
            'Bloqueado' => 0, 
            'Admin' => 1
        ]);
    }
}
