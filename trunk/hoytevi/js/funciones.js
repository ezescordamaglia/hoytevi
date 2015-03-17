$(document).ready(function(){
    //utilizamos el evento keyup para coger la información
    //cada vez que se pulsa alguna tecla con el foco en el buscador
    $(".autocompletar").keyup(function(){
                    
        //en info tenemos lo que vamos escribiendo en el buscador
        var info = $(this).val();
        //hacemos la petición al método autocompletar del controlador login
        //pasando la variable info
        $.post('login/autocompletar',{ info : info }, function(data){
        
        //Blanqueo el ID    
        $("input[name=localidad_id]").val(0);                
            //si login nos devuelve algo
            if(data != '')
            {
    
                //en el div con clase contenedor mostramos la info
                $(".contenedor").html(data);
                                
            }else{
                                
                $(".contenedor").html('');
                                
            }
        })
                    
    })
                
 
    //buscamos el elemento pulsado con live y mostramos un alert
    /*$(".contenedor").find("a").live('click',function(e){
        e.preventDefault();
        var select = $(this).html();
        $(".autocompletar").val(select);
        $(".contenedor").html('');
    });
    */

    $(".contenedor").find("a").live('click',function(e){
        e.preventDefault();
        $("input[name=localidad]").val($(this).text());
        $("input[name=localidad_id]").val($(this).attr("id"));
        $('.contenedor p').hide();
    });

})