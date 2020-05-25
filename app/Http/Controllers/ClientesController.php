<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes.index',[
            'clientes' => Cliente::all()
        ]);
        // $clientes = Cliente::all();
        // return $clientes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create', [
            'cliente' => new Cliente
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

        Cliente::create($request->validate([
            'nombre' => 'required',
            'alias' => 'required',
            'telefono' => 'required',
            'estado' => 'required',
        ]));

        return redirect()->route('clientes.index')->with('status', 'El proyecto fue creado con exito');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show',[
            'cliente' => $cliente,
        ]);
        // return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit',[
            'cliente' => $cliente,
        ]);
        // return $cliente;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
        $cliente->update($request->validate([
            'nombre' => 'required',
            'alias' => 'required',
            'telefono' => 'required',
            'estado' => 'required',
        ]));

        return redirect()->route('clientes.index')->with('status', 'El proyecto fue actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
        $cliente->delete();
        return redirect()->route('clientes.index')->with('status','El cliente fue borrado con exito');
    }
}
