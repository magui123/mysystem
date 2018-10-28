<?php

namespace App\Http\Controllers;

use App\Venta;
use App\Pago;
use Illuminate\Http\Request;
use Auth;
use Session;


class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campanhas = null;

        if(Session::has('id_empresa')){
            $camphanas = Auth::user()->campanhas()->where('id_empresa',Session::get('id_empresa'))->get();
            return view('venta.index',compact('camphanas'));
        }
        return view('admin.index');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Auth::user()->productos()->where('id_empresa',Session::get('id_empresa'))->orderBy('nombre')->get();
        $campanhas = Auth::user()->campanhas()->where('id_empresa',Session::get('id_empresa'))->get();
        return view('venta.create',compact('campanhas','productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for ($i=0; $i <$request->cantidad ; $i++) { 
            $venta = new Venta;
            $venta->precio_compra = $request->precio_compra;
            $venta->precio_publico = $request->precio_publico;
            $venta->id_producto = $request->id_producto;
            $venta->id_campanha = $request->id_campanha;
            $venta->save();
        }
        return response()->json([
            'msj' => 'success',
            'text' => 'Registrado con exito '.$request->cantidad.' productos',
        ]);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }

    public function ventas($id){
        
        if($id == 0){
            $campanhas = Auth::user()->campanhas()
            ->where('id_empresa',Session::get('id_empresa'))
            ->with('ventas.producto')
            ->with('ventas.cliente')
            ->with('ventas.pagos')
            ->get();
            return response()->json($campanhas->toArray());
        }else{
           $campanhas =  Auth::user()->campanhas()
                        ->where('id',$id)
                        ->where('id_empresa',Session::get('id_empresa'))
                        ->with('ventas.producto')
                        ->with('ventas.cliente')
                        ->with('ventas.pagos')
                       // ->with('ventas.saldo')
                        ->get();
            return response()->json($campanhas->toArray());
        }
    }

    public function vproducto($id){
        $venta    = Venta::find($id);
        $clientes = Auth::user()->clientes()->orderBy('apellido')->orderBy('nombre')->get();
        //var_dump($clientes);
        return view('venta.vproducto',compact('clientes','venta'));
    }

    public function vproductonew(Request $r,$id){

        $venta = Venta::find($id);

        if($venta->pagos()->count() == 0){
            
            $venta->precio_venta = $r->precio_venta;
            $venta->id_cliente = $r->cliente;
            $venta->tipo_pago =$r->tipo_pago;
            $venta->tipo_pago_desc = ( $r->tipo_pago == 1)? 'pagos':'contado';
            $venta->save();
            $pago = new Pago;
            $pago->acuenta = ( $r->tipo_pago == 0)? $r->precio_venta :$r->a_cuenta;
            $pago->saldo =  ( $r->tipo_pago == 0)? 0 :  (float) $r->precio_venta - (float)$r->a_cuenta;
            $pago->id_venta = $venta->id;
            $pago->save();
            return response()->json(['msj'=>'success','text'=>'Producto vendido']);
        }
        return response()->json(['msj'=>'warning','text'=>'Producto ya vendido a otra persona']);
    }

    public function vpago($id){
        $venta    = Venta::find($id);   
        $clientes = Auth::user()->clientes()->orderBy('apellido')->orderBy('nombre')->get();
        $pagos = $venta->pagos()->get();
        return view('venta.vpago',compact('clientes','venta','pagos'));  
    }

    public function vpagonew(Request $r,$id){
        $venta    = Venta::find($id);   
        $pago = new Pago;
        $pago->acuenta = $r->a_cuenta;
        $pago->saldo =  $venta->saldo() - $r->a_cuenta;
        $pago->id_venta = $venta->id;
        $pago->save();
        $pagos = $venta->pagos()->get();
        return response()->json([
            'msj'=>'success',
            'text'=>'Pago realizado: '.$r->a_cuenta.' bs',
            'pagos'=> $pagos,
            'saldo'=> $venta->saldo() - $r->a_cuenta
        ]);
    }

    public function vresumen($id){
        $venta    = Venta::find($id);
        $clientes = Auth::user()->clientes()->orderBy('apellido')->orderBy('nombre')->get();
        return view('venta.vresumen',compact('clientes','venta'));
    }
}
