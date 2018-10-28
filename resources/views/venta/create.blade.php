@extends('admin.layout')
@section('content')

    <div id="msj"></div>
    <div class="block-header"><h2>Agregar nuevo producto a la venta</h2></div>

    <div class="row clearfix">
        <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header"> 
                    <div class="row">
                        <div class="col-lg-6">Agregar producto a la venta
                        </div>
                       
                    </div>
                </div>
                <div class="body">
                    <form action="javascript:" name="crear-venta">  
                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="campanha">Elije campaña</label>
                            <select name="campanha" id="" class="form-control">
                                @foreach($campanhas as $camp)
                                    <option value="{{$camp->id}}">#{{$camp->nro_camp.' '.$camp->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="producto">Elije Producto</label>
                            <select name="producto" id="" class="form-control">
                                @foreach($productos as $prod)
                                    <option value="{{$prod->id}}">{{$prod->codigo.' '.$prod->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Precio compra</label>
                            <input type="text" name="precio_compra" class="form-control" placeholder="0.00" required="">
                        </div>

                        <div class="form-group">
                            <label for="">Precio publico</label>
                            <input type="text" name="precio_publico" class="form-control" placeholder="0.00" required="">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control" value="1" placeholder="" required="">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Registrar productos a la Venta">
                        </div>
                    </form>
                </div>
                <div class="footer">
                    <div class="row"><div class="col-lg-12"><a href="{{url('venta')}}" class="btn btn-primary"> Ir a la lista</a></div></div> 
                </div>               
            </div>
        </div>
    </div>

 
    
@endsection
@section('scripts')
   <script src="{{url('/js/venta.create.js')}}"></script>
@endsection

