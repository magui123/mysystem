@extends('admin.layout')
@section('content')

    @include('mensaje.mensaje')
    <div class="block-header"><h2>Mis empresas</h2></div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">Listado de mis empresas </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                        <th>#</th>
                        <th>Nombre de la Empresa</th>
                        <th>Fecha de inicio</th>
                        </thead>
                        <tbody>
                            @foreach($empresas as $empresa)
                            <tr>
                                <td>{{$empresa->empresa->id}}</td>
                                <td>{{$empresa->empresa->nombre}}</td>
                                <td>{{$empresa->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <div class="form-group">
                            <a href="{{url('empresa/create')}}" class="btn btn-primary">Agregar Empresa</a>
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

