<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CodEmpresa = session('CodEmpresa');
        $ClientesListado = DB::select("SELECT * FROM cl_clientes where CodEmpresa = $CodEmpresa AND Estado > 0");
        return view("clientes.index",compact('ClientesListado'));
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
        clientes::create($request->all());// se llama al modelo donde le especificamos que necesita
        return redirect('clientes')->with('mensaje','Se agrego el cliente exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ClientesR = clientes::where('CodCliente', decrypt($id))->firstOrFail();
        //return $ClientesR;
        return view("clientes.edit",compact('ClientesR'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosClientes = request()->except(['_token','_method']);
        //dd($datosClientes);
        clientes::where('CodCliente','=',$id)->update($datosClientes);
        return redirect('clientes')->with('mensaje','Se edito el cliente exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(clientes $clientes)
    {
        //
    }
}
