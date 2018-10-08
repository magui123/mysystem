@extends('admin.layout')
@section('content')

    @include('mensaje.mensaje')
    <div class="block-header"><h2>Mis campañas </h2></div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">Campañas de la empresa <strong>{{Session::get('nombre_empresa')}}</strong> </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <th>Nro de campaña</th>
                            <th>Campaña</th>
                            <th>Detalle</th>
                            <th>Premios e incentivo</th>

                        </thead>
                        <tbody>
                            @foreach($campanhas as $campanha)
                            <tr>
                                <td>{{$campanha->nro_camp}}</td>
                                <td>{{$campanha->nombre}}</td>
                                <td>{{$campanha->detalle}}</td>
                                <td>{{$campanha->premios}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <div class="form-group">
                            <a href="{{url('campanha/create')}}" class="btn btn-primary">Nueva campaña</a>
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

