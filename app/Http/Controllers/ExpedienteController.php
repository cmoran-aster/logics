<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpedienteController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $CorrelativoBusqueda = trim($request->get('CorrelativoBusqueda'));
        $AnoBus = trim($request->get('AnoBusqueda'));
        $CodEmbarcadorBusqueda = trim($request->get('CodEmbarcadorBusqueda'));
        $CodConsignatarioBusqueda = trim($request->get('CodConsignatarioBusqueda'));
        $CodAgenteBusqueda = trim($request->get('CodAgenteBusqueda'));
        $CodigoPaisOrigenBusqueda = trim($request->get('CodigoPaisOrigenBusqueda'));
        $PaisDestinoBusqueda = trim($request->get('PaisDestinoBusqueda'));
        $BookingBusqueda = trim($request->get('BookingBusqueda'));
        $BlBusqueda = trim($request->get('BlBusqueda'));
        $EquipoBusqueda = trim($request->get('EquipoBusqueda'));
        $CodEmpresa = session('CodEmpresa');



        $queryExp = "SELECT DISTINCT exp.CodExpediente, exp.NumExpediente, exp.AnoExpediente, emb.Cliente as Embarcador, 
                                     cons.Cliente as Consignatario, ag.Cliente as Agente, 
                                     DATE_FORMAT(FechaVenta, '%d/%m/%Y') as FechaVentaEsp
                    FROM lgs_expedientes exp
                    LEFT JOIN cl_clientes emb ON exp.CodEmbarcador = emb.CodCliente
                    LEFT JOIN cl_clientes cons ON exp.CodConsignatario = cons.CodCliente
                    LEFT JOIN cl_clientes ag ON exp.CodAgente = ag.CodCliente
                    LEFT JOIN c_puertos ori ON exp.CodigoPuertoOrigen = ori.CodigoPuerto
                    LEFT JOIN c_puertos de ON exp.CodigoPuertoDestino = de.CodigoPuerto
                    WHERE exp.CodEmpresa = $CodEmpresa AND exp.Estado > 0 ";
        
        if ($AnoBus) {
            $queryExp .= " AND AnoExpediente = $AnoBus ";
        }

        if ($CorrelativoBusqueda) {
            $queryExp .= " AND NumExpediente = $CorrelativoBusqueda ";
        }

        if ($CodEmbarcadorBusqueda > 0) {
            $queryExp .= " AND exp.CodEmbarcador = $CodEmbarcadorBusqueda ";
        }

        if ($CodConsignatarioBusqueda > 0) {
            $queryExp .= " AND exp.CodConsignatario = $CodConsignatarioBusqueda ";
        }

        if ($CodAgenteBusqueda > 0) {
            $queryExp .= " AND exp.CodAgente = $CodAgenteBusqueda ";
        }

        if ($CodigoPaisOrigenBusqueda > 0) {
            $queryExp .= " AND exp.CodigoPuertoOrigen = $CodAgenteBusqueda ";
        }
        
        if ($PaisDestinoBusqueda > 0) {
            $queryExp .= " AND exp.CodigoPuertoDestino = $PaisDestinoBusqueda ";
        }

        if ($BookingBusqueda) {
            $queryExp .= " AND exp.NumBooking LIKE '$BookingBusqueda'";
        }

        if ($BlBusqueda) {
            $queryExp .= " AND exp.NumBL LIKE '$BlBusqueda'";
        }

        $queryExp .= "ORDER BY exp.AnoExpediente, exp.NumExpediente";


        $ExpedientesListado = DB::select($queryExp);
        $ListadoPaises = DB::select("SELECT * FROM c_paises ORDER BY Pais ");
        $ListadoDeAgentes = DB::select("SELECT * FROM cl_clientes WHERE Estado > 0 AND Agente = 1 ORDER BY Cliente ");
        $ListadoDeEmbarcador = DB::select("SELECT * FROM cl_clientes WHERE Estado > 0 AND Proveedor = 1 ORDER BY Cliente ");
        $ListadoPuertos = DB::select("SELECT * FROM c_puertos ORDER BY Puerto ");
        $ListadoDescripEquip = DB::select("SELECT * FROM c_equiposdescripciones ");





        return view("expedientes.index",compact('ExpedientesListado','ListadoPaises','ListadoDeAgentes','ListadoDeEmbarcador','ListadoPuertos','ListadoDescripEquip'));
        //return view("expedientes.index");
    }

    public function all(Request $request){
        
        return "hola";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $CodEmpresa = session('CodEmpresa');
        $anoActu = date('Y');
        $AnoCorre = DB::select("SELECT * FROM lgs_correlativos WHERE AnoActual = $anoActu");
        if (count($AnoCorre) > 0) {
            foreach ($AnoCorre as $Corre)
            {
                $CorrelativoActual = ($Corre->NumExpedienteActual + 1);
            }
        }else{
            DB::table('lgs_correlativos')->insert([
                                                    ['NumExpedienteActual' => '0', 'AnoActual' => $anoActu]
                                                ]);

            $CorrelativoActual = 1;
        }

        $request->merge(['NumExpediente' => $CorrelativoActual, 'AnoExpediente' => $anoActu]);


        if (Expediente::create($request->all())) {
            DB::table('lgs_correlativos')
              ->where('AnoActual', $anoActu)
              ->update(['NumExpedienteActual' => $CorrelativoActual]);

              return redirect('expediente')->with('mensaje','Se creo el expediente exitosamente.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function show(Expediente $expediente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function edit(Expediente $expediente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $CodExpediente)
    {
        $datosExpediente = request()->except(['_token','_method']);
 
        Expediente::where('CodExpediente','=',$CodExpediente)->update($datosExpediente);
        return redirect('expediente-mod/'.$CodExpediente)->with('mensaje','Se edito el expediente exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expediente $expediente)
    {
        //
    }
}
