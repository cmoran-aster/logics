<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ListadoDePaises extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $variable = array( array('CodPais'=> 'AD', 'Pais'=>'Andorra', 'Numero'=> '020', 'ISO'=> 'AND'),
                           array('CodPais'=> 'AE', 'Pais'=>'Emiratos Árabes Unidos', 'Numero'=> '784', 'ISO'=> 'ARE'),
                           array('CodPais'=> 'AF', 'Pais'=>'Afganistán', 'Numero'=> '004', 'ISO'=> 'AFG'),
                           array('CodPais'=> 'AG', 'Pais'=>'Antigua y Barbuda', 'Numero'=> '028', 'ISO'=> 'ATG') );                             	 	 	
                            	  	 	
        
       foreach ($variable as $key => $value) {

            $CodPais = $value['CodPais'];
            $ISO = $value['ISO'];
            $Numero = $value['Numero'];
            $Pais = $value['Pais'];

            DB::table('c_paises')->insert([
                'CodigoPais' => $CodPais,
                'ISO' => $ISO,
                'Numero' => $Numero,
                'Pais' => $Pais
            ]);
       }
        
    }
}
