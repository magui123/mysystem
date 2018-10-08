@extends('admin.layout')
@section('content')

    @include('mensaje.mensaje')
    <div class="block-header"><h2>Agregar nueva empresa</h2></div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header"><h2>Agregar nueva empresa <small>Usted puede agregar una empresa de la <strong>lista</strong> de empresas, o puede incluir una nueva.</small></h2></div>
                <div class="body">
                    <form action="{{url('/empresa')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="">Elige una empresa</label>
                            <select name="id_empresa" id="id_empresa" class="form-control show-ticka">
                                <option value="0">Otro</option>
                                @foreach($empresas as $empresa)
                                    <option value="{{$empresa->id}}">{{$empresa->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Nombre de la empresa</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre de la nueva empresa" require="">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Agregar" class="btn btn-success">
                            <a href="{{url('/empresa')}}" class="btn btn-primary" >Ir a mis empresas</a>
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

