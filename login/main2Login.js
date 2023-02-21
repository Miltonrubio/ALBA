//iniciamos la funcion ajax

jQuery(document).on('submit','#formLg',function(event){
    event.preventDefault();
    jQuery.ajax({
      //tomamos la direccion del php, el tipo de formulario y el tipo de archivo a mandar
        url:"login.php",
        type:'POST',
        dataType:'json',
        //Serializar significa que tomamos los datos del formulario
        data:$(this).serialize(),
        beforeSend:function(){

        }
      })
        //Si la funcion es exitosa, se muestra la respuesta en la consola
      .done(function(respuesta){
        console.log(respuesta);
      })
              //Si la funciona falla, se muestra lo que fallo en la consola
      .fail(function(resp){
        console.log(resp.responseText);
      })
              //Una vez que se realice la acción se mostrara "complete"  
      .always(function(){
      
        console.log("complete");
    });
});
