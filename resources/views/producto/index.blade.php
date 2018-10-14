@extends('admin.layout')
@section('content')

    @include('mensaje.mensaje')
    <div class="block-header"><h2>Mis Productos </h2></div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">Productos  <strong>{{Session::get('nombre_empresa')}}</strong> </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>codigo</th>

                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                            <tr>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->descripcion}}</td>
                                <td>{{$producto->codigo}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <div class="form-group">
                            <a href="{{url('producto/create')}}" class="btn btn-primary">Nuevo producto</a>
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