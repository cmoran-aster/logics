<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListadoDescripcionEquipos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $variable = array(  array('2231', '20 Reefer',           '20RF', '20', '1', '0'),
                            array('22G4', '20 Standard',         '20ST', '20', '0', '0'),
                            array('22P6', '20 Flat Rack',        '20FR', '20', '0', '0'),
                            array('42G4', '40 Standard',         '40ST', '40', '0', '0'),
                            array('42P6', '40 Flat Rack',        '40FR', '40', '0', '0'),
                            array('42R0', '40 Reefer',           '40RF', '40', '1', '0'),
                            array('45G0', '40 High Cube',        '40HC', '40', '0', '1'),
                            array('45GP', '40 High Cube Reefer', '40HR', '40', '1', '1'),
                            array('L2G4', '45 Standard',         '45ST', '45', '0', '0')
                         );


        for ($i = 0; $i < count($variable); $i++) {
            
            $CodigoDescripcionEquipo = $variable[$i][0];
            $DescripcionEquipo       = $variable[$i][1];
            $Abreviatura             = $variable[$i][2];
            $CodTamano               = $variable[$i][3];
            $Reefer                  = $variable[$i][4];
            $HighCube                = $variable[$i][5];
            

            DB::table('c_equiposdescripciones')->insert([
                'CodigoDescripcionEquipo' => $CodigoDescripcionEquipo,
                'DescripcionEquipo' => $DescripcionEquipo,
                'Abreviatura' => $Abreviatura,
                'CodTamano' => $CodTamano,
                'Reefer' => $Reefer,
                'HighCube' => $HighCube
            ]);
        }
    }
}
