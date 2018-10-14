<?php

namespace App\Http\Controllers;

use App\Producto;
use Auth;
use Session;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('id_empresa')){
            $productos = Producto::where('id_usuario',Auth::user()->id)->where('id_empresa',Session::get('id_empresa'))->orderBy('nombre')->get();
        }else{
            $productos = Producto::where('id_usuario',Auth::user()->id)->where('id_empresa',0)->orderBy('nombre')->get();
        }
        return view('producto.index',compact('productos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('producto.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->id_usuario = Auth::user()->id;
        $producto->id_empresa = Session::get('id_empresa');
        $producto->nombre = $request->nombre;
        $producto->descripcion  = $request->descripcion.'';
        $producto->codigo = $request->codigo;
        $producto->save();
        Session::flash('success','Producto creada con éxito');
        return view('producto.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
