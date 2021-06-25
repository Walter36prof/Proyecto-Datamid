$(document).ready(function(e) {

    

    $("#formulario_area").on('submit',function(e){
        e.preventDefault();
        var tipo_user= document.getElementById("tipouser").value
        
        if(tipo_user==1){
        Swal.fire({
            title: '¿Esta seguro de realizar el cambio?',
            text: "Los datos serán reemplazados",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {
                enviaDatosAreaEditada();
           
            }
    
          })   

        }
        else{
            if(tipo_user>=2){
                Swal.fire({
                  title: '¿Está seguro de realizar esta acción?',
                  text: "Se enviará una petición al administrador para su aprobación o rechazo",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Enviar Petición',
                  cancelButtonText: 'Cancelar'
                }).then((result) => {
                  if (result.isConfirmed) {
                      enviaDatosAreaEditadoInvitado()
                 
                  }
            
                })
              }
        }
    })

//AQUI EMPIEZA PARA NUEVA AREA
    $("#formulario_area2").on('submit',function(e){
        e.preventDefault();
        var tipo_user= document.getElementById("tipouser").value
        
        if(tipo_user==1){

        // aqui no pregntamos porque es admin y puede agregar areas nuevas
        // entonces mandamos llamar al metodo que hace la peticion ajax 

        enviaDatosNuevaArea();

        // Swal.fire({
        //     title: '¿Esta seguro de crear un nuevo?',
        //     text: "Los datos serán reemplazados",
        //     icon: 'warning',
        //     showCancelButton: true,
        //     confirmButtonColor: '#3085d6',
        //     cancelButtonColor: '#d33',
        //     confirmButtonText: 'Confirmar',
        //     cancelButtonText: 'Cancelar'
        //   }).then((result) => {
        //     if (result.isConfirmed) {
        //         enviaDatosNuevaArea();
           
        //     }
    
        //   })   

        }
        else{
            if(tipo_user==2){
                Swal.fire({
                  title: '¿Está seguro de realizar esta acción?',
                  text: "Se enviará una petición al administrador para su aprobación o rechazo",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Enviar Petición',
                  cancelButtonText: 'Cancelar'
                }).then((result) => {
                  if (result.isConfirmed) {
                      enviaDatosNuevaAreaInvitado()
                 
                  }
            
                })
              }
        }
    })




    
     
});

function enviaDatosAreaEditada(){
    var myForm = $("#formulario_area")[0]
   
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: new FormData(myForm),  //parametros serializados
        contentType: false,
        cache: false,
        processData:false,
        url: 'services/guardarAreaEditada.php', // url del archivo q va a procesar los datos
        
        success: function(response) //si la respuesta es exitosa
        {
            console.log(response);
            var resultado=JSON.parse(response);//parseamos el resultado a JSON
           if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
            Swal.fire({
                icon: 'success',
                title: 'DATOS ACTUALIZADOS',
                
               
              })
                 setTimeout(function(){
                     window.location.href = "areasdelsistema.php";//redirigimos a index despues de 3 segundos
                 }, 2000); 
           }
           else{
            Swal.fire({
                icon: 'error',
                title: 'No se actualizaron los datos',
                text: 'Modifica un campo antes de guardar',
               
              })
           }

        }

    });
}

function enviaDatosAreaEditadoInvitado(){
    var myForm = $("#formulario_area")[0]
   
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: new FormData(myForm),  //parametros serializados
        contentType: false,
        cache: false,
        processData:false,
        url: 'services/guardarAreaEditada.php', // url del archivo q va a procesar los datos
        
        success: function(response) //si la respuesta es exitosa
        {
            console.log(response);
            var resultado=JSON.parse(response);//parseamos el resultado a JSON
           if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
            Swal.fire({
                icon: 'success',
                title: 'Se ha enviado su peticion',
                
               
              })
                 setTimeout(function(){
                     window.location.href = "areasdelsistema.php";//redirigimos a index despues de 3 segundos
                 }, 2000); 
           }
           else{
            Swal.fire({
                icon: 'error',
                title: 'No se actualizaron los datos',
                text: 'Modifica un campo antes de guardar',
               
              })
           }

        }

    });
}





function enviaDatosNuevaArea(){
    var myForm = $("#formulario_area2")[0]
   
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: new FormData(myForm),  //parametros serializados
        contentType: false,
        cache: false,
        processData:false,
        url: 'services/agregarNuevaArea.php', // url del archivo q va a procesar los datos
        
        success: function(response) //si la respuesta es exitosa
        {
            console.log(response);
            var resultado=JSON.parse(response);//parseamos el resultado a JSON
           if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
            Swal.fire({
                icon: 'success',
                title: 'DATOS GUARDADOS CORRECTAMENTE',
                
               
              })
                 setTimeout(function(){
                     window.location.href = "areasdelsistema.php";//redirigimos a index despues de 3 segundos
                 }, 2000); 
           }
           else{
            Swal.fire({
                icon: 'error',
                title: 'No se GUARDARON los datos',
                text: 'Modifica un campo antes de guardar',
               
              })
           }

        }

    });
}

function enviaDatosNuevaAreaInvitado(){
    var myForm = $("#formulario_area2")[0]
   
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: new FormData(myForm),  //parametros serializados
        contentType: false,
        cache: false,
        processData:false,
        url: 'services/agregarNuevaArea.php', // url del archivo q va a procesar los datos
        
        success: function(response) //si la respuesta es exitosa
        {
            console.log(response);
            var resultado=JSON.parse(response);//parseamos el resultado a JSON
           if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
            Swal.fire({
                icon: 'success',
                title: 'Se ha enviado su peticion',
                
               
              })
                 setTimeout(function(){
                     window.location.href = "areasdelsistema.php";//redirigimos a index despues de 3 segundos
                 }, 2000); 
           }
           else{
            Swal.fire({
                icon: 'error',
                title: 'No se GUARDARON los datos',
                text: 'Modifica un campo antes de guardar',
               
              })
           }

        }

    });
}