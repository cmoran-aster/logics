<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MonedasT extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Listado = array(
            array('GTQ', 'Quetzales Guatemala'),
            array('USD', 'Dolares US')
        );
        for ($i = 0; $i < count($Listado); $i++) {

            $Naviera = $Listado[$i][0];
            $Direccion = $Listado[$i][1];

            DB::table('c_monedas')->insert([
                'CodigoMoneda' => $Naviera,
                'Moneda' => $Direccion
            ]);
        }
    }
}
