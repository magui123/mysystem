$('#tipo_pago').select(function(){
    console.log('ok');
    if($(this).val() == 1){
        $('#tipo_pago_panel').css('visibility','visible');
    }else{
        $('#tipo_pago_panel').css('visibility','hidden');
    }
});

$('form[name="vprod"]').submit(function(){
    var data = {
                    cliente:$('select[name="cliente"]').val(),
                    precio_venta:$('input[name="precio_venta"]').val(),
                    tipo_pago:$('select[name="tipo_pago"]').val(),
                    a_cuenta:$('input[name="a_cuenta"]').val(),
                    saldo:$('input[name="saldo"]').val()
                }
    console.log(data);
    if(data.cliente != 0){
        $.ajax({
            url:baseURL + 'vproductonew/'+$('#id').val(),
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
    }else{
        msjAlert('msj','danger','Selecciona un cliente');
    }
});