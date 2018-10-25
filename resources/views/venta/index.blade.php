@extends('admin.layout')
@section('content')

    @include('mensaje.mensaje')
    <div class="block-header"><h2>Productos a la venta</h2></div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header"> 
                    <div class="row">
                        <div class="col-lg-6">Ventas
                            <div class="form-group">
                                <a href="{{url('venta/create')}}" class="btn btn-primary">Agregar Producto a la venta</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <select name="campanha" id="" class="form-control">
                                <option value="0">Todas las campañas</option>
                                @foreach($camphanas as $camp)
                                    <option value="{{$camp->id}}">#{{$camp->nro_camp.' '.$camp->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio Costo</th>
                                    <th>Precio Publico</th>
                                    <th>Precio Venta</th>
                                    <th>Cliente</th>
                                    <th>Tipo de pago</th>
                                    <th>Ganancia</th> 
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody id="table-productos" >
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
   <script src="{{url('/js/venta.index.js')}}"></script>
@endsection

