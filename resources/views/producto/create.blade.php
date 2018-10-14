@extends('admin.layout')
@section('content')

    @include('mensaje.mensaje')
    <div class="block-header"><h2>Agregar Producto</h2></div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header"><h2>Agrega productos <small>agrega todos tus productos de respectiva campaña <strong>{{Session::get('nombre_empresa')}}</strong> .</small></h2></div>
                <div class="body">
                    <form action="{{url('/producto')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre del producto" required="">
                        </div>

                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control" placeholder="descripcion del producto" required="">
                        </div>
                        

                        <div class="form-group">
                            <label for="">codigo</label>
                            <input type="text" name="codigo" class="form-control" placeholder="codigo revista del producto" required="">
                        </div>

                        
                        <div class="form-group">
                            <input type="submit" value="Agregar producto" class="btn btn-success">
                            <a href="{{url('/producto')}}" class="btn btn-primary" >Ir a mis productos</a>
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

