@extends('admin.layout')
@section('content')

    @include('mensaje.mensaje')
    <div class="block-header"><h2>Mis Clientes </h2></div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">Clientes </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <th>Apellidos y Nombre</th>
                            <th>Cantidad de productos</th>
                            <th>total venta</th>
                            <th>total a cuenta</th>
                            <th>total saldo</th>
                            <th>Accion</th>
                            

                        </thead>
                        <tbody>
                           @foreach($clientes as $c)
                                <tr>
                                    <td>{{$c->apellido.' '.$c->nombre}}</td>
                                    <td>{{$c->cantidad}}</td>
                                    <td>{{$c->t_venta}}</td>
                                    <td>{{$c->t_cuenta}}</td>
                                    <td><strong>{{$c->t_saldo}}</strong></td>
                                    <td><a href="#{{$c->id}}" class="btn btn-primary btn-circle" >Ver</a></td>
                                </tr>
                           @endforeach
                        </tbody>
                        </table>
                        <div class="form-group">
                            <a href="{{url('cliente/create')}}" class="btn btn-primary">Nuevo cliente</a>
                                                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script >
    </script>
@endsection