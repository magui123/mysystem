<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Empresa;
use App\campanha;

class AdminController extends Controller
{
    //
        public function admin(){
            return view('admin.index');
        }

        public function campanhas($id){   // id de la empresa
            Session::put('id_empresa',$id);
            Session::put('nombre_empresa',Empresa::find($id)->nombre);
            Session::put('id_campanha',0);
            Session::put('nombre_campanha','Todas las campañas');
            $camphanas = Auth::user()->campanhas()->where('id_empresa',$id)->get();
            return response()->json(
                $camphanas->toArray()
            );
        }

        public function campanha($id){   // id de la empresa
            Session::put('id_campanha',$id);
            $campanha = Campanha::find($id);
            Session::put('nombre_campanha','#'.$campanha->nro_camp.' '.$campanha->nombre);
            return response()->json([
                'campanha' => $id
            ]);
        }

        public function empr(){
            $empresas = Auth::user()->empresas()->with('empresa')->get();
            return response()->json($empresas->toArray());
        }

        public function camp(){
            if(Session::has('id_empresa')){
                $camphanas = Auth::user()->campanhas()->where('id_empresa',Session::get('id_empresa'))->get();
                return response()->json(
                    $camphanas->toArray()
                );
            }
            return response()->json([]);
        }
}
