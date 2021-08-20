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
                            $op = " <button class='btn btn-danger' name='delete' id=''>Eliminar</button> ";
                            $op .= "";
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


        return view("expedientesmod.index",compact('ExpedientesListado',
                                                    'CodExpediente',
                                                    'ListadoPaises',
                                                    'ListadoDeAgentes',
                                                    'ListadoDeEmbarcador',
                                                    'ListadoPuertos',
                                                    'ListadoDescripEquip',
                                                    'ListadoNav',
                                                    'LugaresBL'));
    }

    public function EquiposActualizar(Request $request){


    }
}
