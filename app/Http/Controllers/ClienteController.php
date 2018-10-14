<?php

namespace App\Http\Controllers;

use App\Cliente;
use Auth;
use Session;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('id_usuario')){
            $clientes = Cliente::where('id_usuario',Auth::user()->id)->orderBy('nombre')->get();
        }else{
            $clientes = Cliente::where('id_usuario',Auth::user()->id)->orderBy('nombre')->get();
        }
        return view('cliente.index',compact('clientes')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->id_usuario = Auth::user()->id;
        $cliente->nombre = $request->nombre;
        $cliente->apellido  = $request->apellido;
        $cliente->telefono = $request->telefono;
        $cliente->procedencia = $request->procedencia.'';
        $cliente->whatsapp = $request->whatsapp;
        $cliente->facebook = $request->facebook.'';
        $cliente->detalle = $request->detalle.'';
        $cliente->save();
        Session::flash('success','Cliente creado con exito!!!');
        return view('cliente.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
