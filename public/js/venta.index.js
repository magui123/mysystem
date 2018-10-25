

function cargarVentas(id){
    var route = baseURL + 'v/'+id;
    var list = $('#table-productos');
    $.get(route,function(res){
        console.log(res);
        $(res).each(function(key, value) {
            list.append('<tr>'
                    +'<td colspan="9" style="background-color:#eee">Campaña NRO:'+value.nro_camp+''+value.nombre+'</td>'
                    +'</tr>');

            $(value.ventas).each(function(key, value){
                list.append('<tr>'
                                +'<td>'+value.id+'</td>'
                                +'<td>'+value.producto.nombre+'</td>'
                                +'<td>'+value.precio_compra+'</td>'
                                +'<td>'+value.precio_publico+'</td>'
                                +'<td>'+((value.precio_venta == null )? '--':value.precio_venta)+'</td>'
                                +'<td>'+((value.cliente == null )? '--':value.cliente.nombre+' '+value.cliente.apellido)+'</td>'
                                +'<td>'+((value.tipo_pago_desc == null )? '--':value.tipo_pago_desc)+'</td>'
                                +'<td>'+((value.precio_venta == null )? '--':(parseFloat(value.precio_venta) - parseFloat(value.precio_compra)))+'</td>'
                                +'<td><a class="btn '+((value.tipo_pago_desc == null )? 'btn-default':(value.tipo_pago == 1)? 'btn-warning' : 'btn-success' )
                                
                                +' btn-circle btn-xs" title="Vender"'+
                                ((value.tipo_pago_desc == null )? 'href="/vproducto/'+value.id+'"' : (value.tipo_pago == 1)? 'href="#"' : 'href="#"')
                                +'><i class="material-icons" >attach_money</i></a>'
                                +'<button class="btn btn-default btn-circle btn-xs"><i class="material-icons">mode_edit</i></button>'
                                // +'<button class="btn btn-default btn-circle btn-xs"><i class="material-icons">delete</i></button></td>'
                            +'</tr>');
            });
            
        });
    });
}



(function(){
    cargarVentas(0);
})();