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
    public function index()
    {
        $CodEmpresa = session('CodEmpresa');
        $ExpedientesListado = DB::select("SELECT * FROM lgs_expedientes where CodEmpresa = $CodEmpresa AND Estado > 0");
        $ListadoPaises = DB::select("SELECT * FROM c_paises ORDER BY Pais ");
        $ListadoDeAgentes = DB::select("SELECT * FROM cl_clientes WHERE Estado > 0 AND Agente = 1 ORDER BY Cliente ");
        $ListadoDeEmbarcador = DB::select("SELECT * FROM cl_clientes WHERE Estado > 0 AND Proveedor = 1 ORDER BY Cliente ");
        $ListadoPuertos = DB::select("SELECT * FROM c_puertos ORDER BY Puerto ");
        $ListadoDescripEquip = DB::select("SELECT * FROM c_equiposdescripciones ");

        return view("expedientes.index",compact('ExpedientesListado','ListadoPaises','ListadoDeAgentes','ListadoDeEmbarcador','ListadoPuertos','ListadoDescripEquip'));
        //return view("expedientes.index");
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
    public function update(Request $request, Expediente $expediente)
    {
        //
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
