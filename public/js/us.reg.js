

$(document).ready(function(){
    $('form[name="register"]').submit(function(){

    if($('#password').val() == $('#password-repeat').val()){

        $.ajax({
            url:baseURL+'us',
            headers:{ 'X-CSRF-TOKEN': $('#_token').val() },
            type:'POST',
            dataType:'json',
            data:{
                name:$('#name').val(),
                last_name:$('#last_name').val(),
                phone:$('#phone').val(),
                email:$('#email').val(),
                user:$('#user').val(),
                password:$('#password').val(),
               
            },
            success: function(res) {
                //console.log(res);
    
                $('#msjregister').empty();
                $('#msjregister').html('<span id="resSuccess" class="text-success"> Registrado correctamente </span>');
            },
            error: function(msj) {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                // console.log(msj);
                $('#msjregister').empty();
                $('#msjregister').html(' <span id="resSuccess" class="text-danger"> Error</span>');
            }
        });

    }else{
        $('#msjregister').html('<span id="resSuccess" class="text-danger">  las contraseñaz no cinciden </span>');
         
    }
    });


    $('form[name="log"]').submit(function(){
        $.ajax({
            url:baseURL+'log',
            headers:{ 'X-CSRF-TOKEN': $('#_token').val() },
            type:'POST',
            dataType:'json',
            data:{
                user:$('#loguser').val(),
                password:$('#logpassword').val()
            },
            success:function(res){
                if(res.mensaje == 'success'){
                    window.location.replace(baseURL+"admin");
                }else{
                    $('#msjlogin').empty();
                    $('#msjlogin').html('<span id="resSuccess" class="text-danger"> Autentificaci&oacute;n invalida </span>');    
                }
            },
            error:function(res){
                $('#msjlogin').empty();
                $('#msjlogin').html('<span id="resSuccess" class="text-danger"> Error</span>');
          
            }
        })
    });

});