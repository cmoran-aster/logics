<?php

namespace App\Http\Controllers;


use App\Models\Expediente;
use App\Models\equipos;
use App\Models\gastos;
use App\Models\costos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class ExpedienteMod extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $CodEmpresa = session('CodEmpresa');
        $CodExpediente = $request->CodExpediente;

            if ($request->ajax()) {
                $CodExpediente = $request->CodExpediente;
                $Datos = $request->Datos;

                if ($Datos == "EquiposTable") {
                    $Equipos = DB::select("SELECT * FROM exp_equipos WHERE Estado > 0 AND CodExpediente = $CodExpediente  ");
                    return DataTables::of($Equipos)
                            ->addColumn('action',function($Equipos){
                                $op = " <button class='btn btn-danger delete' name='delete' id='".$Equipos->CodEquipo."'>Eliminar</button> ";
                                $op .= " <input type='hidden' name='_token' id=\"token".$Equipos->CodEquipo."\" value=\"".csrf_token()."\" />";
                                return $op;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
                }

                if ($Datos == "CostoUsdTable") {
                    $queryGastoUSD = "SELECT g.*,cl.Cliente,cg.TipoGasto
                                FROM exp_gastos g
                                LEFT JOIN cl_clientes cl ON g.CodProveedor = cl.CodCliente
                                LEFT JOIN ct_c_gastostipos cg on g.CodigoTipoGasto = cg.CodigoTipoGasto
                                WHERE g.CodExpediente = $CodExpediente AND g.Estado > 0 AND g.Dolares = 1";

                    $CobrosUSD = DB::select($queryGastoUSD);

                    
                        return DataTables::of($CobrosUSD)
                            ->addColumn('action',function($CobrosUSD){
                                $op = " <button class='btn btn-danger DeleteCobroUsd' name='delete' id='".$CobrosUSD->CodGasto."'>Eliminar</button> ";
                                $op .= " <input type='hidden' name='_token' id=\"tokenCosto".$CobrosUSD->CodGasto."\" value=\"".csrf_token()."\" />";
                                return $op;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
                    
                }

                if ($Datos == "IngresoUsdTable") {
                    $queryIngresoUSD = "SELECT c.*, cc.TipoCargo
                                        FROM exp_cargos c
                                        LEFT JOIN ct_c_cargostipos cc ON c.CodigoTipoCargo = cc.CodigoTipoCargo
                                        WHERE c.CodExpediente = $CodExpediente AND c.Estado > 0 AND Dolares = 1";

                    $CobrosUSD = DB::select($queryIngresoUSD);

                    
                        return DataTables::of($CobrosUSD)
                            ->addColumn('action',function($CobrosUSD){
                                $op = " <button class='btn btn-danger DeleteIngresoUsd' name='delete' id='".$CobrosUSD->CodCargo."'>Eliminar</button> ";
                                $op .= " <input type='hidden' name='_token' id=\"tokenGasto".$CobrosUSD->CodCargo."\" value=\"".csrf_token()."\" />";
                                return $op;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
                }
                
            }
        

        $queryExp = "SELECT  exp.*,
                            emb.Cliente as Embarcador, 
                            cons.Cliente as Consignatario, 
                            ag.Cliente as Agente
                    FROM lgs_expedientes exp
                    LEFT JOIN cl_clientes emb ON exp.CodEmbarcador = emb.CodCliente
                    LEFT JOIN cl_clientes cons ON exp.CodConsignatario = cons.CodCliente
                    LEFT JOIN cl_clientes ag ON exp.CodAgente = ag.CodCliente
                    LEFT JOIN c_puertos ori ON exp.CodigoPuertoOrigen = ori.CodigoPuerto
                    LEFT JOIN c_puertos de ON exp.CodigoPuertoDestino = de.CodigoPuerto
                    WHERE exp.CodEmpresa = $CodEmpresa AND exp.Estado > 0 AND exp.CodExpediente = $CodExpediente ";

        
        
        $ExpedientesListado = DB::select($queryExp);
        $ListadoPaises = DB::select("SELECT * FROM c_paises ORDER BY Pais ");
        $ListadoDeAgentes = DB::select("SELECT * FROM cl_clientes WHERE Estado > 0 AND Agente = 1 ORDER BY Cliente ");
        $ListadoDeEmbarcador = DB::select("SELECT * FROM cl_clientes WHERE Estado > 0 AND Proveedor = 1 ORDER BY Cliente ");
        $ListadoPuertos = DB::select("SELECT * FROM c_puertos ORDER BY Puerto ");
        $ListadoDescripEquip = DB::select("SELECT * FROM c_equiposdescripciones ");
        $ListadoNav = DB::select("SELECT * FROM c_navieras ");
        $LugaresBL = DB::select("SELECT * FROM c_lugarespresentacionbl");
        $embalajeList = DB::select("SELECT * FROM c_embalajestipos");
        $gastosTipo = DB::select("SELECT * FROM ct_c_gastostipos WHERE Estado > 0 AND CodEmpresa = $CodEmpresa");
        $cargosTipo = DB::select("SELECT * FROM ct_c_cargostipos WHERE Estado > 0 AND CodEmpresa = $CodEmpresa");
        $MonedasL = DB::select("SELECT * FROM c_monedas");
        
        return view("expedientesmod.index",compact('ExpedientesListado',
                                                    'CodExpediente',
                                                    'ListadoPaises',
                                                    'ListadoDeAgentes',
                                                    'ListadoDeEmbarcador',
                                                    'ListadoPuertos',
                                                    'ListadoDescripEquip',
                                                    'ListadoNav',
                                                    'LugaresBL',
                                                    'embalajeList',
                                                    'gastosTipo',
                                                    'MonedasL',
                                                    'cargosTipo'
                                                    ));
    }
        /******************** EMBARCADOR ***********************/  
        public function embarcadoroconsignatario(Request $request){

            $area       = $request->area;
            $cod        = $request->cod;
            $expediente = $request->expediente;
    
            $SqlText = "SELECT Cliente, DirOficina, Nit 
                        FROM cl_clientes cli 
                        INNER JOIN lgs_expedientes exp ON cli.CodCliente = ";
            if ($area == 'embarcador') {
                $SqlText .= 'exp.CodEmbarcador';
            } 
            if ($area== 'consigantario') {
                $SqlText .= 'exp.CodConsignatario';
            }
            $SqlText .= " WHERE CodExpediente = $expediente ";
            
            $Cliente = DB::select($SqlText);
    
            $resultado = array();
            foreach ($Cliente as $row) {
                $Cliente[0] = substr($row->Cliente, 0, 35); 
                $Cliente[1] = substr($row->Cliente, 35, 35); 
                $Cliente[2] = substr($row->DirOficina, 0, 35); 
                $Cliente[3] = substr($row->DirOficina, 35, 35); 
                $Cliente[4] = substr($row->DirOficina, 70, 35); 
                $Cliente[5] = $row->Nit;    
            }
    
            $fila = array($Cliente[0], $Cliente[1], $Cliente[2], $Cliente[3], $Cliente[4], $Cliente[5]);
            array_push($resultado, $Cliente);
    
            return $resultado;
    
        }

    /******************** EQUIPOS ***********************/    
    public function equipoagregar(Request $request){

        $CodExpediente = $request->CodExpediente;
        $Indenti       = trim($request->Identificacion);

        $PruebaDeEquipo = DB::select("SELECT COUNT(*) as TotalEncontrado FROM exp_equipos WHERE CodExpediente = $CodExpediente  AND Identificacion = '$Indenti'");
        foreach ($PruebaDeEquipo as $resultado) {
            $encon = $resultado->TotalEncontrado;
        }
        if ($encon > 0) {
            return "Este equipo ya fue ingresado en este expediente";
        }
        //para agregar otro dato al array request
        $request->merge(['UsuarioCreacion' => auth()->user()->usuario]);
        equipos::create($request->all());
        return 1;
    }

    public function EquiposActualizar(Request $request){// sirve para actualizar o para eliminar

        $CodEquipo     = $request->CodEquipo;
        $CodExpediente = $request->CodExpediente;

        $datosEquipos = request()->except(['_token','_method']);
        equipos::where('CodEquipo', $CodEquipo)
              ->where('CodExpediente', $CodExpediente)
              ->update(['Estado' => 0]);

              return 1;

    }

    
    /******************** COSTO USD ***********************/  
    public function CostoUsdAgregar(Request $request){

        $CodExpediente = $request->CodExpediente;
        
        //para agregar otro dato al array request
        $request->merge(['UsuarioCreacion' => auth()->user()->usuario]);
        gastos::create($request->all());
        return 1;
    }

    public function CostoUsdActualizar(Request $request){// sirve para actualizar o para eliminar

        $CodGasto    = $request->CodGasto;
        $CodExpediente = $request->CodExpediente;

        $datosEquipos = request()->except(['_token','_method']);

        gastos::where('CodGasto', $CodGasto)
        ->where('CodExpediente', $CodExpediente)
        ->update(['Estado' => 0]);

        return 1;

    }
   

    /******************** INGRESOS ***********************/  
    public function IngresoUsdAgregar(Request $request){

        $CodExpediente = $request->CodExpediente;
        
        //para agregar otro dato al array request
        $request->merge(['UsuarioCreacion' => auth()->user()->usuario]);
        costos::create($request->all());
        return 1;
    }

    public function IngresoUsdActualizar(Request $request){// sirve para actualizar o para eliminar

        $CodIngreso    = $request->CodGasto;
        $CodExpediente = $request->CodExpediente;

        $datosEquipos = request()->except(['_token','_method']);

        costos::where('CodCargo', $CodIngreso)
        ->where('CodExpediente', $CodExpediente)
        ->update(['Estado' => 0]);

        return 1;

    }

    
    public function IngresoGtqList(Request $request)
    {   
        $CodExpediente = $request->CodExpediente;
        $queryIngresoGTQ = "SELECT c.*, cc.TipoCargo
                            FROM exp_cargos c
                            LEFT JOIN ct_c_cargostipos cc ON c.CodigoTipoCargo = cc.CodigoTipoCargo
                            WHERE c.CodExpediente = $CodExpediente AND c.Estado > 0 AND Dolares = 0";

        $CobrosGTQ = DB::select($queryIngresoGTQ);

        
        $ingresoGT = "<tr>
                        <th colspan='7'>INGRESOS GTQ</th>
                      </tr>";

        $ingresoGTs = "<tr>
                        <th colspan='7'>INGRESOS POR CUENTA AJENA</th>
                        </tr>";
        $TotalCargo = 0;
        $TotalCargos = 0;
        foreach ($CobrosGTQ as $List) {
            

            if ($List->CtAjena == 1) {
                $sIVA = $List->Cargo;

                $ingresoGTs .= "<tr>
                                <td>".date('d-m-Y', strtotime($List->FechaCargo))."</td>
                                <td>".$List->TipoCargo."</td>
                                <td>".$List->Descripcion."</td>
                                <td>".$List->Moneda."</td>
                                <td>".number_format($List->Cargo,2)."</td>
                                <td>".number_format($sIVA,2)."</td>
                                <td>
                                    <button class='btn btn-danger DeleteIngresoGt' name='delete' id='".$List->CodCargo."'>Eliminar</button>
                                </td>
                            </tr> ";
            }else{
                $sIVA = ($List->Cargo / 1.12);
                $ingresoGT .= "<tr>
                                <td>".date('d-m-Y', strtotime($List->FechaCargo))."</td>
                                <td>".$List->TipoCargo."</td>
                                <td>".$List->Descripcion."</td>
                                <td>".$List->Moneda."</td>
                                <td>".number_format($List->Cargo,2)."</td>
                                <td>".number_format($sIVA,2)."</td>
                                <td>
                                    <button class='btn btn-danger DeleteIngresoGt' name='delete' id='".$List->CodCargo."'>Eliminar</button>
                                </td>
                            </tr> ";
            }


            $TotalCargo = $List->Cargo + $TotalCargo;
            $TotalCargos = $sIVA + $TotalCargos;
            
        }

        $table = "<table class=\"table table-sm table-bordered\" id=\"table-ingreso-gt\">
                    <thead>
                        <tr>
                            <th>Fecha Ingreso</th>
                            <th>Tipo Cargo</th>
                            <th>Descripcion</th>
                            <th>Moneda</th>
                            <th>Total</th>
                            <th>s/IVA</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    $ingresoGT
                    $ingresoGTs
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>".number_format($TotalCargo,2)."</td>
                            <td>".number_format($TotalCargos,2)."</td>
                            <td>
                                
                            </td>
                        </tr>
                    </tbody>
                 </table>";


        return $table;
    }

    
    public function CostoGtqList(Request $request){
        $CodExpediente = $request->CodExpediente;
        $queryGastoUSD = "SELECT g.*,cl.Cliente,cg.TipoGasto
                                FROM exp_gastos g
                                LEFT JOIN cl_clientes cl ON g.CodProveedor = cl.CodCliente
                                LEFT JOIN ct_c_gastostipos cg on g.CodigoTipoGasto = cg.CodigoTipoGasto
                                WHERE g.CodExpediente = $CodExpediente AND g.Estado > 0 AND g.Dolares = 0";

        $CobrosUSD = DB::select($queryGastoUSD);
        $CostoGT = "<tr>
                        <th colspan='11'>COSTO GTQ</th>
                      </tr>";

        $CostoGTUS = "<tr>
                        <th colspan='11'>COSTO EN DOLARES</th>
                        </tr>";
        $CostoGTf = "<tr>
                        <th colspan='11'>COSTO SIN FACTURA</th>
                    </tr>";
        $CostoGTS = "<tr>
                        <th colspan='11'>COBRO POR CUENTA AJENA</th>
                    </tr>";

 
        $totalMonto = 0;
        $TotalTotal = 0;
        $TotalAjena = 0;

        $i = 0;
        foreach ($CobrosUSD as $List) {
            
            $i++;

            if ($List->Moneda == "GTQ") {
                $monto = $List->Gasto;
                $montoQ = ($List->Gasto);
                $montosiVA = ($List->Gasto / 1.12);
            }else{
                $monto = $List->Gasto;
                $montoQ = ($List->Gasto * $List->TipoCambio);
                $montosiVA = (($List->Gasto / 1.12)* $List->TipoCambio);
            }

            if ($List->CtAjena == 1 || $List->CtAjena == 2) { // si es 2 es porque es sin factura y si es 1 es porque es de cuenta ajena
                if ($List->Moneda == "GTQ") {
                    $monto = $List->Gasto;
                    $montoQ = ($List->Gasto);
                    $montosiVA = $List->Gasto;
                }
            }

            $data = "<tr>
                        <th>$i</th>
                        <td>".$List->Cliente."</td>
                        <td>".date('d-m-Y', strtotime($List->FechaGasto))."</td>
                        <td>".$List->NumFactura."</td>
                        <td>".$List->TipoGasto."</td>
                        <td>".$List->Descripcion."</td>
                        <td>".$List->TipoCambio."</td>
                        <td>".$List->Moneda."</td>
                        <td>".number_format($monto,2)."</td>
                        <td>".number_format($montosiVA,2)."</td>
                        <td></td>
                    </tr>   ";


            if ($List->CtAjena == 0) {
                $totalMonto = $totalMonto + $montosiVA;
                if ($List->Moneda == "GTQ") {
                    $CostoGT .= $data;
                }else{
                    $CostoGTUS .= $data;
                }
            }
            if ($List->CtAjena == 1) {
                $CostoGTS .= $data;
                $TotalAjena = $TotalAjena + $montosiVA;
            }
            if ($List->CtAjena == 2) {
                $CostoGTf .= $data;
            }
            $TotalTotal = $TotalTotal + $montoQ;
        }



        $table = "<table class=\"table table-sm table-bordered\" id=\"table-costos-usd\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Proveedor</th>
                            <th>Fecha Factura</th>
                            <th>No Factura</th>
                            <th>Gasto</th>
                            <th>Descripción</th>
                            <th>T.C.</th>
                            <th>Moneda</th>
                            <th>Total</th>
                            <th>s/IVA</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        $CostoGT
                        $CostoGTUS
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>TOTAL:</th>
                            <th></th>
                            
                            <th>".number_format($totalMonto,2)."</th>
                            <th></th>
                        </tr>
                        
                        $CostoGTf
                        $CostoGTS
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            
                            <th>TOTAL:</th>
                            <th>".number_format($TotalTotal,2)."</th>
                            <th>".number_format($TotalAjena,2)."</th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>";

            return $table;
    }
    


    
}
