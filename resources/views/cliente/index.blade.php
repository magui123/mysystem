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
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Procedencia</th>
                            <th>Whatsapp</th>
                            <th>Facebook</th>
                            <th>Detalle</th>

                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->nombre}}</td>
                                <td>{{$cliente->apellido}}</td>
                                <td>{{$cliente->telefono}}</td>
                                <td>{{$cliente->procedencia}}</td>
                                <td>{{$cliente->whatsapp}}</td>
                                <td>{{$cliente->facebook}}</td>
                                <td>{{$cliente->detalle}}</td>
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