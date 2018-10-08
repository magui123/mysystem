<?php

namespace App\Http\Controllers;

use App\Campanha;
use Auth;
use Session;
use Illuminate\Http\Request;

class CampanhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(Session::has('id_empresa')){
            $campanhas = Campanha::where('id_usuario',Auth::user()->id)->where('id_empresa',Session::get('id_empresa'))->orderBy('nro_camp')->get();
        }else{
            $campanhas = Campanha::where('id_usuario',Auth::user()->id)->where('id_empresa',0)->orderBy('nro_camp')->get();
        }
        return view('campanha.index',compact('campanhas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campanha.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campanha = new Campanha;
        $campanha->id_usuario = Auth::user()->id;
        $campanha->id_empresa = Session::get('id_empresa');
        $campanha->nro_camp = $request->nro_camp;
        $campanha->nombre  = $request->nombre;
        $campanha->detalle = $request->detalle.'';
        $campanha->premios = $request->premios.'';
        $campanha->save();
        Session::flash('success','Campaña creada con éxito');
        return view('campanha.create');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function show(Campanha $campanha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function edit(Campanha $campanha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campanha $campanha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campanha $campanha)
    {
        //
    }
}
