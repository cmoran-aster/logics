<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TipoGastosCt extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Listado = array(
            array('PIL', 'Piloto Afianzado'),
            array('TRA', 'Trámite Aduanal'),
            array('MOV', 'Movimiento Terrestre'),
            array('GRD', 'Guardia'),
            array('PAT', 'Patrulla'),
            array('FLM', 'Flete Marítimo'),

            array('SEG', 'Seguro'),
            array('GPS', 'Servicio de GPs'),
            array('CDR', 'Cuadrilla'),
            array('ESP', 'Tiempo de Espera'),
            array('TRI', 'Trámite Aduanal Internacional'),

            array('SRJ', 'Gastos Selectivo Rojo'),
            array('CH3', 'Chassis 3 Ejes'),
            array('IMP', 'Impresión de BL'),
            array('GLC', 'Gastos Locales')
        );


        for ($i = 0; $i < count($Listado); $i++) {

            $Naviera = $Listado[$i][0];
            $Direccion = $Listado[$i][1];

            DB::table('ct_c_gastostipos')->insert([
                'CodEmpresa' => 1,
                'CodigoTipoGasto' => $Naviera,
                'CodNomenclatura' => 1,
                'TipoGasto' => $Direccion
            ]);
        }
    }
}
