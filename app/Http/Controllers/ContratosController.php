<?php

namespace App\Http\Controllers;

use App\Contratos;
use Illuminate\Http\Request;
//use App\Http\Requests\SaveProjectRequest;
use App\Http\Requests\SaveContratoRequest;
class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contratos.index',[
            'cliente' => \App\Cliente::with('contratos')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contratos.create', [
            'contrato' => new Contratos,
            'cliente' => \App\cliente::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $estado = 'A';
        $client = \App\Cliente::findOrFail($request->cliente_id);
        // return $client;
            if($client->estado == $estado){
                request()->validate([
                    'horas_contratadas' => 'required|numeric',
                    'fecha_inicio' => 'required',
                    'fecha_fin' => 'required|after:fecha_inicio',
                ]);

                $contrato = new Contratos;
                $contrato->cliente_id = $request->cliente_id;
                $contrato->horas_contratadas = $request->horas_contratadas;
                $contrato->horas_restantes = $request->horas_contratadas;
                $contrato->fecha_inicio = $request->fecha_inicio;
                $contrato->fecha_fin = $request->fecha_fin;
                $contrato->estado = "A";
                $contrato->save();
                // Contratos::create($contrato->validated());
                return redirect()->route('contratos.index')->with('status', 'El proyecto fue creado con exito');
        }else{
            return back()->with('status', 'El cliente esta inactivo porfavor corrobore el cliente');
        }
        // $request->horas_restantes = $contrato->horas_restantes;
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function show(Contratos $contrato)
    {
        //
        //return $contrato;
        return view('contratos.show',[
            'contrato' => $contrato,
            'cliente' => \App\Cliente::findOrFail($contrato->cliente_id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function edit(Contratos $contrato)
    {
        return view('contratos.edit',[
            'contrato' => $contrato,
            'cliente' => \App\Cliente::findOrFail($contrato->cliente_id)
        ]);
        //$cliente = \App\Cliente::findOrFail($contrato->cliente_id);
        //return $cliente;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function update(SaveContratoRequest $request, Contratos $contrato)
    {
        $contrato->update($request->validated());
        return redirect()->route('contratos.index', $contrato)->with('status', 'el contrato fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contratos $contrato)
    {
        //
        //return "llegaste hasta destroy";
        $contrato->delete();
        return redirect()->route('contratos.index')->with('status','El contrato fue borrado con exito');
    }
}
