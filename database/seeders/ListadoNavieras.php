<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListadoNavieras extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Listado = array(
                        array('Maersk', 'Edificio Atlantis', 'Favor emitir giro bancario a nombre de Maersk Guatemala\nLos cargos locales deben cancelarse con cheque en quetzales a nombre de'),
                        array('CSAV', '14 Calle, 1-11 Edificio Atlantis', 'Emitir Cheque de Caja en Dolares a nombre de Agencia Maritima Global'),
                        array('Dole', '', ''),
                        array('Chiquita', '', ''),
                        array('Del Monte', '', ''),
                        array('NYK', '', '1. CHEQUE DE CAJA A NOMBRE DE BRASMARES, S.A.\n2. DEPOSITO MONETARIO EN EFECTIVO EN BAM CUENTA# 30-4011914-0 A NOMBRE DE BRASMARES, S.A.'),
                        array('CMA-CGM', '', ''),
                        array('King Ocean', '', ''),
                        array('Wan Hai', '', ''),
                        array( 'Hapag-Lloyd', 'Avenida Reforma 9-55 Zona 10, Edificio Reforma 10 Ofc. 601A Ciudad  Guatemala', '.'),
                        array( 'MSC', '1A AVENIDA 13-29 ZONA 10 EDIFICIO DUBAI CENTER OF 410 4TO NIVEL', 'Cheque de caja a nombre de MEDITERRANEAN SHIPPING COMPANY GUATEMALA, S.A.\nSolo efectivo Banco Industrial cta # 158-001568-5 \nse debera entregar cheque de caja o  boleta original en oficinas de MSC'),
                        array( 'ZIM', '', 'LOS CARGOS  DEBEN SER CANCELADOS EN OFICINAS DE PUERTO UNICAMENTE'),
                        array( 'Nordana', '', ''),
                        array( 'Hamburg-Sud', 'Avenida Reforma, 9-55 Zona 10, Edif. Reforma 10, 7o Nivel, Of. 707', 'cheque de caja en nuestra oficina a nombre de Hamburg Sud Guatemala, S.A.,'),
                        array( 'China Shipping', '', ''),
                        array( 'Evergreen', 'Diagonal 6 10-50 zona 10 Interamericas Financial Center, Torre Norte 6to. Nivel Oficina 603', 'Deben realizarse en oficinas centrales de Evergreen, con cheque de caja (quetzales), y cheque de Caja en (Dolares) de Banco local en caso de pago de Flete o Demoras todos los pagos a nombre de SERVICIOS NAVIEROS Y PORTUARIOS, S. A.'),
                        array( 'HMM', '13 calle 3-40 zona 10 Edificio Atlantis 8vo. Nivel Oficina 802', '*Cheque de Caja a nombre de AGENCIA DE TRANSPORTE MARITIMO, S. A.  *DepÃ³sito monetario en efectivo BANCO G&T CONTINENTAL  Cuenta No. 066-0016105-9 a nombre de AGENCIA DE TRANSPORTE MARITIMO, S. A.'),
                        array( 'APL', '1 Av 10-87 Zona10 Edificio Torre Viva Nivel 7', 'DEPOSITO MONETARIO BANCO INDUSTRIAL  CUENTA# 313-001048-8 A NOMBRE DE AIMAR, S.A.'),
                        array( 'Cosco', '3a. Avenida 12-38, Zona 10, Edificio Paseo Plaza 7mo Nivel, Oficina 701', 'Cheque de caja en dÃƒÂ³lares o Quetzales a nombre de NAVIOMAR GUATEMALA, S.A.')
                    );


        for ($i = 0; $i < count($Listado); $i++) {

            $Naviera = $Listado[$i][0];
            $Direccion = $Listado[$i][1];
            $FormaPago = $Listado[$i][2];

            DB::table('c_navieras')->insert([
                'Naviera' => $Naviera,
                'Direccion' => $Direccion,
                'FormaPago' => $FormaPago
            ]);
        }
    }
}
