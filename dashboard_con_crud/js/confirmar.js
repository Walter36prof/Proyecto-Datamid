$(document).ready(function() {

    $(".eliminar").click(function(event) {
        event.preventDefault();
      var id = $(this).attr('href');
      
      Swal.fire({
        title: '¿Está seguro de realizar esta acción?',
        text: "No será posible deshacer el cambio",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
            enviaDatos(id);
       
        }

      })
    });

    $(".eliminarAreas").click(function(event) {
      event.preventDefault();
      var id = $(this).attr('href');
      var tipo_user=$(this).data('tipo');
      var nombreArea=$(this).data('nombrearea');
      var descripcion=$(this).data('descripcion');
      var imagen=$(this).data('imagen');
    
      if(tipo_user==1){
        Swal.fire({
          title: '¿Está seguro de realizar esta acción?',
          text: "No será posible deshacer el cambio",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Eliminar',
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.isConfirmed) {
              enviaDatosArea(id);
         
          }
    
        })
      }
      else{
        if(tipo_user>=2){
        Swal.fire({
          title: '¿Está realmente seguro de realizar esta acción?',
          text: "Se enviará una petición al administrador para su aprobación o rechazo",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Enviar Petición',
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.isConfirmed) {
              enviaDatosAreaInvitado(id,nombreArea,descripcion,imagen);
         
          }
    
        })
      }
    
      }
  });


    $(".eliminarCambio").click(function(event) {
      event.preventDefault();
    var id = $(this).attr('href');
    
    Swal.fire({
      title: '¿Desea realmente rechazar el cambio?',
      text: "No será posible deshacer la acción",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Rechazar',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
          enviaDatosCambio(id);
     
      }

    })
  });

  $(".permitircambio").click(function(event) {
    event.preventDefault();
  var tabla = $(this).data('tabla');
  var tipo = $(this).data('tipo');
  var idarea = $(this).data('idarea');
  var nombrearea = $(this).data('nombrearea');
  var descripcion = $(this).data('descripcion');
  var imagen = $(this).data('imagen');
  
  Swal.fire({
    title: '¿Desea realmente permitir el cambio?',
    text: "No será posible deshacer la acción",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Permitir',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
        enviaDatosPermitir(tabla,tipo,idarea,nombrearea,descripcion,imagen);
   
    }

  })
});


    $(".eliminarUsuario").click(function(event) {
      event.preventDefault();
    var id = $(this).attr('href');
    
    Swal.fire({
      title: '¿Está seguro de realizar esta acción?',
      text: "No será posible deshacer el cambio",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Eliminar',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
          enviaDatosUsuario(id);
     
      }

    })
  });

  $(".eliminarPerfil").click(function(event) {
    event.preventDefault();
  var id = $(this).attr('href');
  
  Swal.fire({
    title: '¿Está seguro de realizar esta acción?',
    text: "No será posible deshacer el cambio",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Eliminar',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
        enviaDatosPerfil(id);
   
    }

  })
});
  
    
    //EliminarTsubsidiosAsimilados
    $(".eliminarTSubAsimi").click(function(event) {
      event.preventDefault();
    var id = $(this).attr('href');
    
    Swal.fire({
      title: '¿Está seguro de realizar esta acción?',
      text: "No será posible deshacer el cambio",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Eliminar',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
          enviaDatosTSubAsimi(id);
     
      }

    })
  });

  //EliminarSubsidios
  $(".eliminarSubsidio").click(function(event) {
    event.preventDefault();
  var id = $(this).attr('href');
  
  Swal.fire({
    title: '¿Está seguro de realizar esta acción?',
    text: "No será posible deshacer el cambio",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Eliminar',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
        enviaDatosSubsidio(id);
   
    }

  })
});

//EliminarNomina
$(".eliminarNomina").click(function(event) {
  event.preventDefault();
var id = $(this).attr('href');

Swal.fire({
  title: '¿Está seguro de realizar esta acción?',
  text: "No será posible deshacer el cambio",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      enviaDatosNomina(id);
 
  }

})
});

//EliminarSalario
$(".eliminarSalario").click(function(event) {
  event.preventDefault();
var id = $(this).attr('href');

Swal.fire({
  title: '¿Está seguro de realizar esta acción?',
  text: "No será posible deshacer el cambio",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      enviaDatosSalario(id);
 
  }

})
});

//EliminarVacaciones
$(".eliminarVacaciones").click(function(event) {
  event.preventDefault();
var id = $(this).attr('href');

Swal.fire({
  title: '¿Está seguro de realizar esta acción?',
  text: "No será posible deshacer el cambio",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      enviaDatosVacaciones(id);
 
  }

})
});

//EliminarUmas
$(".eliminarUmas").click(function(event) {
  event.preventDefault();
var id = $(this).attr('href');

Swal.fire({
  title: '¿Está seguro de realizar esta acción?',
  text: "No será posible deshacer el cambio",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eiminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      enviaDatosUmas(id);
 
  }

})
});

//EliminarEmpresa
$(".eliminarEmpresa").click(function(event) {
  event.preventDefault();
var id = $(this).attr('href');

Swal.fire({
  title: '¿Está seguro de realizar esta acción?',
  text: "No será posible deshacer el cambio",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      enviaDatosEmpresa(id);
 
  }

})
});

//EliminarIsr
$(".eliminarISR").click(function(event) {
  event.preventDefault();
var id = $(this).attr('href');

Swal.fire({
  title: '¿Está seguro de realizar esta acción?',
  text: "No será posible deshacer el cambio",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      enviaDatosISR(id);
 
  }

})
});

//EliminarIspt
$(".eliminarISPT").click(function(event) {
  event.preventDefault();
var id = $(this).attr('href');

Swal.fire({
  title: '¿Está seguro de realizar esta acción?',
  text: "No será posible deshacer el cambio",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      enviaDatosISPT(id);
 
  }

})
});

//EliminarISRASIMILADO
$(".eliminarISRAsimi").click(function(event) {
  event.preventDefault();
var id = $(this).attr('href');

Swal.fire({
  title: '¿Está seguro de realizar esta acción?',
  text: "No será posible deshacer el cambio",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      enviaDatosISRAsimilado(id);
 
  }

})

});

});

//funciones para eliminar
//enviar a tsubsidios
function enviaDatos(id){
    $.ajax({
        type: 'GET', //forma en que lo estas pasando
        data: 'idSubsidio='+id,  //parametros serializados
        url: 'services/eliminartsubsidio.php', // url del archivo q va a procesar los datos
        
        success: function(response) //si la respuesta es exitosa
        {
            console.log(response);
           Swal.fire(
            'Eliminado!',
             'Se ha eliminado el registro.',
             'success'
          )
          setTimeout(function(){
            window.location.href = "tsubsidio.php";//redirigimos a index despues de 3 segundos
        }, 1800); 

        }

    });
}

function enviaDatosArea(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idArea='+id,  //parametros serializados
      url: 'services/eliminarAreaSistema.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "areasdelsistema.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
function enviaDatosAreaInvitado(id,nombreArea,descripcion,imagen){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idArea='+id+ '&nombreArea='+nombreArea+ '&descripcionArea='+descripcion+ '&imagenPortada='+imagen,  //parametros serializados
      url: 'services/eliminarAreaSistema.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Petición de Eliminar Realizada!',
           'Su peticion ahora esta en espera de aprobacion por el administrador del sistema.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "areasdelsistema.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
function enviaDatosPermitir(tabla,tipo,idarea,nombrearea,descripcion,imagen){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idtabla='+tabla+ '&tiporegistro='+tipo+ '&idarea='+idarea+ '&nombrearea='+nombrearea+ '&descripcionarea='+descripcion+ '&imagenarea='+imagen,  //parametros serializados
      url: 'services/permitircambios.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'CAMBIO PERMITIDO, LOS DATOS SE HAN GUARDADO!',
           'Usted a permitido el cambio.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "cambios.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }
      

  });
}

function enviaDatosCambio(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idtabla='+id,  //parametros serializados
      url: 'services/rechazarcambios.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'CAMBIO RECHAZADO!',
           'Usted a rechazado el cambio.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "cambios.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
//perfil
function enviaDatosPerfil(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idProfile='+id,  //parametros serializados
      url: 'services/eliminarPerfilUsuario.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "perfilesUsuario.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
//Usuario
function enviaDatosUsuario(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idEmployee='+id,  //parametros serializados
      url: 'services/eliminarUsuario.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "usuariosdelsistema.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}

//enviar datos a tsubsidiosAsimilados
function enviaDatosTSubAsimi(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idSubsidio='+id,  //parametros serializados
      url: 'services/eliminartsubsidioasimilados.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "tsubsidioasimilados.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
//enviar datos a SUBSIDIOS
function enviaDatosSubsidio(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idSubsidio='+id,  //parametros serializados
      url: 'services/eliminarSubsidio.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "subsidios.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
//enviar datos a Nomina
function enviaDatosNomina(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'IdINomina='+id,  //parametros serializados
      url: 'services/eliminarimpuestonomina.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "impuestonomina.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
//enviar datos a Salario
function enviaDatosSalario(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idsalrio='+id,  //parametros serializados
      url: 'services/eliminarSalario.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "salario.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
//enviar datos a Vacaciones
function enviaDatosVacaciones(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idVacacion='+id,  //parametros serializados
      url: 'services/eliminarVacacion.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "vacaciones.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
//enviar datos a Umas
function enviaDatosUmas(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idUma='+id,  //parametros serializados
      url: 'services/eliminarUma.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "umas.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
//enviar datos a Empresa
function enviaDatosEmpresa(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idEmpresa='+id,  //parametros serializados
      url: 'services/eliminarEmpresa.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "empresas.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
//enviar datos a ISR
function enviaDatosISR(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idIsr='+id,  //parametros serializados
      url: 'services/eliminarIsr.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "isr.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
//enviar datos a ISPT
function enviaDatosISPT(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idIspt='+id,  //parametros serializados
      url: 'services/eliminarIspt.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "ispt.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}
//enviar datos a ISr asimilado
function enviaDatosISRAsimilado(id){
  $.ajax({
      type: 'GET', //forma en que lo estas pasando
      data: 'idIsrAsimi='+id,  //parametros serializados
      url: 'services/eliminarIsrAsimilado.php', // url del archivo q va a procesar los datos
      
      success: function(response) //si la respuesta es exitosa
      {
          console.log(response);
         Swal.fire(
          'Eliminado!',
           'Se ha eliminado el registro.',
           'success'
        )
        setTimeout(function(){
          window.location.href = "isrAsimilados.php";//redirigimos a index despues de 3 segundos
      }, 1800); 

      }

  });
}