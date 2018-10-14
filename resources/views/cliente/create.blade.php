@extends('admin.layout')
@section('content')

    @include('mensaje.mensaje')
    <div class="block-header"><h2>Agregar Cliente</h2></div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header"><h2>Agrega Clientes <small>agrega todos tus clientes <strong>{{Session::get('nombre_empresa')}}</strong> .</small></h2></div>
                <div class="body">
                    <form action="{{url('/cliente')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre del Cliente" required="">
                        </div>

                        <div class="form-group">
                            <label for="">Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="Ingrese el apellido del Cliente" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Telefono/Celular</label>
                            <input type="text" name="telefono" class="form-control" placeholder="Ingrese # de Telefono/Celular " required="">
                        </div>
                        <div class="form-group">
                            <label for="">Procedencia</label>
                            <input type="text" name="procedencia" class="form-control" placeholder="Procedencia del cliente" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Whatsapp</label>
                            <input type="text" name="whatsapp" class="form-control" placeholder="# Whatsapp del cliente" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Facebook</label>
                            <input type="text" name="facebook" class="form-control" placeholder="Nombre de Facebook del cliente" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Detalle</label>
                            <input type="text" name="detalle" class="form-control" placeholder="Gusto en especifico" required="">
                        </div>

                        
                        <div class="form-group">
                            <input type="submit" value="Agregar Cliente" class="btn btn-success">
                            <a href="{{url('/cliente')}}" class="btn btn-primary" >Ir a mis Clientes</a>
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