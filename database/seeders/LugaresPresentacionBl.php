<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LugaresPresentacionBl extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Listado = array(
            array('DE', 'Destino'),
            array('OR', 'Origen'),
            array('GTGUA', 'Guatemala Ciudad'),
            array('GTPRB', 'Puerto Barrios'),
            array('GTPRQ', 'Puerto Quetzal'),
            array('GTSTC', 'Santo Tomás')
        );


        for ($i = 0; $i < count($Listado); $i++) {

            $Naviera = $Listado[$i][0];
            $Direccion = $Listado[$i][1];

            DB::table('c_lugarespresentacionbl')->insert([
                'CodigoLugarPresentacionBL' => $Naviera,
                'LugarPresentacionBL' => $Direccion
            ]);
        }

    }
}
