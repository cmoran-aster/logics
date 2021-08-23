<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TipoEmbalajes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Listado = array(
            array('PK', 'Package'),
            array('BG', 'Bag'),
            array('BX', 'Box'),
            array('PX', 'Pallet'),
            array('CS', 'Case'),
            array('BE', 'Bundle')
        );


        for ($i = 0; $i < count($Listado); $i++) {

            $Naviera = $Listado[$i][0];
            $Direccion = $Listado[$i][1];

            DB::table('c_embalajestipos')->insert([
                'CodigoTipoEmbalaje' => $Naviera,
                'TipoEmbalaje' => $Direccion
            ]);
        }
    }
}
