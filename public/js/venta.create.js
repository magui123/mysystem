$('form[name="crear-venta"]').submit(function(){
    //alert('hola');
    var route = baseURL+'venta';
    var data = {
        precio_compra:$('input[name="precio_compra"').val(),
        precio_publico:$('input[name="precio_publico"]').val(),
        id_producto:$('select[name="producto"').val(),
        id_campanha:$('select[name="campanha"]').val(),
        cantidad:$('input[name="cantidad"]').val()
    }

    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':$('#_token').val()},
        type:'POST',
        dataType:'json',
        data:data,
        success:function(res){
            console.log(res);
            msjAlert('msj',res.msj,res.text);
        },
        error:function(){
            msjAlert('msj','danger','Error');
        }
    });
});
