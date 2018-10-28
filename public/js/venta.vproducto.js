$('#tipo_pago').change(function(){
   
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


$('input[name="precio_venta"]').keypress(function(event){
    var num = $(this).val();
    var exr = /^[1-9]+[0-9]*[.]?[0-9]?[0-9]?$/;
   return (event.charCode < 32) || (exr.test(num+event.key));
});

$('input[name="precio_venta"]').keyup(function(){
   $('input[name="a_cuenta"]').val($(this).val()); 
});


$('input[name="a_cuenta"]').keypress(function(event){
    var num = $(this).val();
    var exr = /^[1-9]+[0-9]*[.]?[0-9]?[0-9]?$/;
   return (event.charCode < 32) || (exr.test(num+event.key));
});


$('input[name="a_cuenta"]').keyup(function(){
    var a = $('input[name="a_cuenta"]').val(); 
    var p = $('input[name="precio_venta"]').val();
    var s = Math.round((p-a)*100)/100;
    $('input[name="saldo"]').val(s);
});



$('form[name="vpagos"]').submit(function(){
    var data = {
                    a_cuenta:$('input[name="a_cuenta"]').val(),
                    saldo:$('input[name="saldo"]').val()
                }
    if(true){
        $.ajax({
            url:baseURL + 'vpago/'+$('#id').val(),
            headers:{'X-CSRF-TOKEN':$('#_token').val()},
            type:'POST',
            dataType:'json',
            data:data,
            success:function(res){
                successPagos(res);
            },
            error:function(){
                msjAlert('msj','danger','Error');
            }
        });
    }else{
        msjAlert('msj','danger','Selecciona un cliente');
    }
});


function successPagos(res){
    console.log(res);
    msjAlert('msj',res.msj,res.text);
    cargarPagos(res.pagos);
    if(res.saldo < 1){
        $('form[name="vpagos"]').css("display","none");
    }
    $('input[name="precio_venta"]').val(res.saldo);
}
function cargarPagos(p){
    var t = $('#table-pagos');
    t.empty();
    p.forEach(function(e){
        t.append('<tr><td>'+e.acuenta+'</td><td>'+e.saldo+'</td><td>'+e.created_at+'</td></tr>')
    });
    
}
