<?php

namespace App\Http\Controllers;


use App\Models\Expediente;
use App\Models\equipos;
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
            if ($request->ajax()) {
                $CodExpediente = $request->CodExpediente;
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

        


        return view("expedientesmod.index",compact('ExpedientesListado',
                                                    'CodExpediente',
                                                    'ListadoPaises',
                                                    'ListadoDeAgentes',
                                                    'ListadoDeEmbarcador',
                                                    'ListadoPuertos',
                                                    'ListadoDescripEquip',
                                                    'ListadoNav',
                                                    'LugaresBL',
                                                    'embalajeList'));
    }


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

    public function EquiposActualizar(Request $request){

        $CodEquipo     = $request->CodEquipo;
        $CodExpediente = $request->CodExpediente;

        $datosEquipos = request()->except(['_token','_method']);
        equipos::where('CodEquipo', $CodEquipo)
              ->where('CodExpediente', $CodExpediente)
              ->update(['Estado' => 0]);

              return 1;

    }

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

    public function DatosCuscarUpdate(Request $request){


    }


    
}
