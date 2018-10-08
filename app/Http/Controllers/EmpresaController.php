<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\UsuarioEmpresa;

use Auth;
use Session;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Auth::user()->empresas()->with('empresa')->get();
        return view('empresa.index',compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::orderBy('nombre')->get();
        return view('empresa.create',compact('empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            if( $request->id_empresa ==0){
                if( $request->nombre != ''){
                $empresa = new Empresa;
                $empresa->nombre =$request->nombre;
                $empresa->save();
                $UsuarioEmpresa = new UsuarioEmpresa;
                $UsuarioEmpresa->id_usuario = Auth::user()->id;
                $UsuarioEmpresa->id_empresa = $empresa->id;
                $UsuarioEmpresa->save();
                    Session::flash('success','Agregado correctamente');
                }else{
                    Session::flash('danger','Usted debe escribir el nombre de la nueva empresa');
                }
            }else{
                
                if( UsuarioEmpresa::where('id_usuario',Auth::user()->id)->where('id_empresa',$request->id_empresa)->get()->count() == 0 )
                {
                    $UsuarioEmpresa = new UsuarioEmpresa;
                    $UsuarioEmpresa->id_usuario = Auth::user()->id;
                    $UsuarioEmpresa->id_empresa = $request->id_empresa;
                    $UsuarioEmpresa->save();
                    Session::flash('success','Agregado correctamente');
                }else{
                    Session::flash('warning','Ya se encuentra registrado');
                }
            }
       


        $empresas = Empresa::orderBy('nombre')->get();
        return view('empresa.create',compact('empresas')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
