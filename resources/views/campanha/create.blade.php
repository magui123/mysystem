@extends('admin.layout')
@section('content')

    @include('mensaje.mensaje')
    <div class="block-header"><h2>Agregar nueva Campaña</h2></div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header"><h2>Agregar nueva campaña <small>Usted puede agregar una nueva campaña para la empresa <strong>{{Session::get('nombre_empresa')}}</strong> .</small></h2></div>
                <div class="body">
                    <form action="{{url('/campanha')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="">Nro de campaña</label>
                            <input type="text" class="form-control" name="nro_camp" placeholder="Ingrese numero de campanha" required="">
                        </div>

                        <div class="form-group">
                            <label for="">Nombre de la campanha</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre de la nueva campaña" required="">
                        </div>
                        

                        <div class="form-group">
                            <label for="">Detalle</label>
                            <input type="text" name="detalle" class="form-control" placeholder="Escriba un detalle">
                        </div>

                        <div class="form-group">
                            <label for="">Premios</label>
                            <input type="text" name="premios" class="form-control" placeholder="Premios">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Agregar nueva campaña" class="btn btn-success">
                            <a href="{{url('/campanha')}}" class="btn btn-primary" >Ir a mis campañas</a>
                            <input type="reset" value="Limpiar" class="btn btn-primary pull-right">
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
   
@endsection

