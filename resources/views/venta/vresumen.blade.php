
@extends('admin.layout')
@section('content')


    <div id="msj"></div>
    <div class="block-header"><h2>Vender </h2></div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header"> 
                        <div class="row">
                            <div class="col-md-6 col-lg-6 "> <h1>Ventas Producto:{{ $venta->producto->nombre}}<h1>
                            </div>
                        
                        </div>
                    </div>
                    <div class="body">
                    <div class="row">
                        <div class="col-lg-6" style="text-aling:center;">
                            <dl>
                                <dt>Producto:</dt><dd>{{ $venta->producto->nombre}}</dd>
                                <dt>Precio costo</dt><dd>{{$venta->precio_compra}}</dd>
                                <dt>Precio publico</dt><dd>{{$venta->precio_publico}}</dd>
                                <dt>Campaña:</dt><dd>{{$venta->campanhas->nro_camp.' '.$venta->campanhas->nombre}}</dd>
                            </dl>
                        </div>
                        <div class="col-lg-6">
                            <form action="javascript:" name="vprod">
                                <input type="hidden" id="_token" value='{{csrf_token()}}'>
                                <input type="hidden" name="" id="id" value='{{$venta->id}}'>
                                 <div class="form-group ">
                                    <label for="">Cliente</label>
                                    <select name="cliente" id="" class="form-control">
                                        <option value="0">Selecciona cliente</option>
                                        @foreach($clientes as $c)
                                            <option value="{{$c->id}}">{{$c->apellido.' '.$c->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Precio Venta</label>
                                    <input type="text" name="precio_venta" id="precio_venta" class="form-control" value="{{$venta->precio_publico}}">
                                </div>

                                <div class="form-group">
                                    <label for="tipo_pago">Tipo de pago</label>
                                    <select name="tipo_pago" id="tipo_pago" class="form-control">
                                        <option value="0">Al contado</option>
                                        <option value="1">A pagos</option>
                                    </select>
                                </div>
                                <div class="row" id="tipo_pago_panel" style="visibility:hidden;">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="">A cuenta</label>
                                            <input type="text" name="a_cuenta" id="a_cuenta" class="form-control" placeholder="0.00" value="{{$venta->precio_publico}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group" > 
                                            <label for="">Saldo</label>
                                            <input type="text" name="saldo" id="saldo" class="form-control" placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <button class="btn btn-success" type="submit" >Vender producto</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12"> <a href="/venta" class="btn btn-primary">Ir la lista de ventas</a>  </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>

@endsection
@section('scripts')
<script src="{{url('/js/venta.vproducto.js')}}"></script>
@endsection

