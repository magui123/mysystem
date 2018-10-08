function empresaElegida(id_empresa,empresa){
    $('#nombre_empresa').html(empresa);
    $('#nombreEmpresaHead').html(empresa);
    cargarCampanha(id_empresa);
    $('#nombre_camp').html('Todas las Campañas');
    $('#nombreCampanhaHead').html('Todas las Campañas');
    $('#selectCampanha').css('display','block');
    
}

function campElegida(id_campanha,categoria){
    //console.log(categoria);
    $('#nombre_camp').html(categoria);
    $('#nombreCampanhaHead').html(categoria);
    setCamp(id_campanha);
   
}


function cargarCampanha(id_empresa){
    var list = $('#listaCampanha');
    var route = baseURL + "admin/campanhas/"+id_empresa;
    $.get(route,function(res){
        //console.log(res);
        list.empty();
        $(res).each(function(key, value) {
             list.append(' <li><a href="javascript:campElegida('+value.id+',\'#'+value.nro_camp+' '+value.nombre+'\');" ><i class="material-icons">description</i> #'+value.nro_camp+' '+value.nombre+'</a></li>');
         });

        list.append('<li role="separator" class="divider"></li>'+
                    '<li><a href="javascript:campElegida(0,\'Todas las campañas\');"><i class="material-icons">description</i>Todas las campañas</a></li>'+
                    '<li><a href="javascript:agregarCampanha();"><i class="material-icons">description</i>Agregar nueva campaña</a></li>'
                         );
                                         
    });
}

function setCamp(id_campanha){
    var route = baseURL + "admin/campanha/"+id_campanha;
    $.get(route,function(res){//console.log(res);
    });
}

function cargarEmpresa(){
    var list = $('#listaEmpresa');
    var route = baseURL + 'admin/empr';
    $.get(route,function(res){
        //console.log(res);
        list.empty();
        $(res).each(function(key, value) {
             list.append(' <li><a href="javascript:empresaElegida('+value.id_empresa+',\''+value.empresa.nombre+'\');" ><i class="material-icons">book</i>'+value.empresa.nombre+'</a></li>');
         });

        list.append('<li role="separator" class="divider"></li>'+
                    '<li><a href="/empresa/create"><i class="material-icons">description</i>Agregar Empresa</a></li>'
                         );
    });
}

function cargarCampanha2(){
    var list = $('#listaCampanha');
    var route = baseURL + "admin/camp";
    $.get(route,function(res){
        //console.log(res);
        list.empty();
        $(res).each(function(key, value) {
             list.append(' <li><a href="javascript:campElegida('+value.id+',\'#'+value.nro_camp+' '+value.nombre+'\');" ><i class="material-icons">description</i> #'+value.nro_camp+' '+value.nombre+'</a></li>');
         });

        list.append('<li role="separator" class="divider"></li>'+
                    '<li><a href="javascript:campElegida(0,\'Todas las campañas\');"><i class="material-icons">description</i>Todas las campañas</a></li>'+
                    '<li><a href="/campanha/create"><i class="material-icons">description</i>Agregar nueva campaña</a></li>'
                         );
    });
}

(function(){
    cargarEmpresa();
    cargarCampanha2();
})();