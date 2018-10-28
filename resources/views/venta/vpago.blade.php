@extends('admin.layout')
@section('content')


    <div id="msj"></div>
    <div class="block-header"><h2>Vender </h2></div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                   
                    <div class="body">
                    <div class="row">
                        <div class="col-lg-6" style="text-aling:center;">
                        <h1>Producto: {{ $venta->producto->nombre}} </h1>
                        <br>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><dl><dt>Precio costo</dt><dd>{{$venta->precio_compra}}</dd></dl></div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><dl><dt>Precio publico</dt><dd>{{$venta->precio_publico}}</dd></dl></div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><dl><dt>Precio Venta</dt><dt><h3>{{$venta->precio_venta}}<h3></dt></dl></div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><dl><dt>Cliente</dt><dd>{{$venta->cliente->apellido.' '.$venta->cliente->nombre}}</dd></dl></div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><dl><dt>Tipo de pago </dt>{{$venta->tipo_pago_desc}}</dl></div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><dl><dt>Campaña:</dt><dd>{{$venta->campanhas->nro_camp.' '.$venta->campanhas->nombre}}</dd></dl></div>
                            </div>

                            @if($venta->saldo() > 0)
                            <form action="javascript:" name="vpagos">
                                <input type="hidden" id="_token" value='{{csrf_token()}}'>
                                <input type="hidden" name="" id="id" value='{{$venta->id}}'> 
                                <input type="hidden" name="precio_venta" id="precio_venta" value="{{$venta->saldo()}}">
                                <div class="row" id="tipo_pago_panel" >
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="">A cuenta</label>
                                            <input type="text" name="a_cuenta" id="a_cuenta" class="form-control" placeholder="0.00" value="{{$venta->saldo()}}">
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
                                    <button class="btn btn-success" type="submit" >Realizar pago</button>
                                </div>
                            </form>
                            @endif
                           
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="header sm-light-blue"><h3>Pagos</h3></div>
                                <div class="body table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>A cuenta </th>
                                        <th>Saldo</th>
                                        <th>fecha</th>
                                    </tr>
                                    </thead>
                                    <tbody id="table-pagos">
                                        @foreach($pagos as $pago)
                                        <tr>
                                            <td>{{$pago->acuenta}}</td>
                                            <td>{{$pago->saldo}}</td>
                                            <td>{{$pago->created_at}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
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

