

function msjAlert(id,msj,text){
    
    var divMsj = $('#'+id);
    
    divMsj.empty();
    switch (msj) {
        
        case 'success': 
        divMsj.html('<div class="alert alert-success alert-dismissible " role="alert">'
                +' <button class="close" type="button" data-dismiss="alert" aria-label="Close">'
                +' <span aria-hidden="true">&times;</span></button>'
                + text
                +'</div>');
        break;

        case 'danger':
        divMsj.html('<div class="alert alert-danger alert-dismissible " role="alert">'
                +' <button class="close" type="button" data-dismiss="alert" aria-label="Close">'
                +' <span aria-hidden="true">&times;</span></button>'
                + text
                +'</div>');
        break;

        case 'primary':
        divMsj.html('<div class="alert alert-primary alert-dismissible " role="alert">'
                +' <button class="close" type="button" data-dismiss="alert" aria-label="Close">'
                +' <span aria-hidden="true">&times;</span></button>'
                + text
                +'</div>');
        break;

        case 'warning':
        divMsj.html('<div class="alert alert-warning alert-dismissible " role="alert">'
                +' <button class="close" type="button" data-dismiss="alert" aria-label="Close">'
                +' <span aria-hidden="true">&times;</span></button>'
                + text
                +'</div>');
        break;

    
        default:
            break;
    }


}

