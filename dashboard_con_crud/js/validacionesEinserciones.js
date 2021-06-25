$(document).ready(function(){

    $("#btn-new-empleado").click(function() //cuando el user haga clic en el boton guardar
    {
        var resultado=ValidarEmpleado();//result es igual a lo que arroje validar puede ser true o false
        if (resultado==true)//si resulta true, inserta el vacaciones
        {
            registrar_Empleado();//funcion registrar vacaciones
        }
         
    });

    $("#btn-edit-usuario").click(function() //cuando el user haga clic en el boton guardar
    {
        var resultado=ValidarEmpleadoEditado();//result es igual a lo que arroje validar puede ser true o false
        if (resultado==true)//si resulta true, inserta el vacaciones
        {
            Swal.fire({
                title: '¿Esta seguro de realizar el cambio?',
                text: "Los datos serán reemplazados",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmar!',
                cancelButtonText: 'Cancelar!'
              }).then((result) => {
                if (result.isConfirmed) {
                    registrar_EmpleadoEditado();
               
                }
        
              })   
            // registrar_EmpleadoEditado();//funcion registrar vacaciones
        }
         
    });

    $("#btn-new-perfil").click(function() //cuando el user haga clic en el boton guardar
    {
        var resultado=ValidarPerfil();//result es igual a lo que arroje validar puede ser true o false
        if (resultado==true)//si resulta true, inserta el vacaciones
        {
            registrar_Perfil();//funcion registrar vacaciones
        }
         
    });
    $("#btn-edit-perfil").click(function() //cuando el user haga clic en el boton guardar
    {
        var resultado=ValidarPerfilEditado();//result es igual a lo que arroje validar puede ser true o false
        if (resultado==true)//si resulta true, inserta el vacaciones
        {
            Swal.fire({
                title: '¿Esta seguro de realizar el cambio?',
                text: "Los datos serán reemplazados",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmar!',
                cancelButtonText: 'Cancelar!'
              }).then((result) => {
                if (result.isConfirmed) {
                    registrar_PerfilEditado();
               
                }
        
              })
            // registrar_PerfilEditado();//funcion registrar vacaciones
        }
         
    });
    

    $("#btn-new-vacation").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarVacaciones();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    registrar_vacaciones();//funcion registrar vacaciones
                }
				 
			});
    $("#btn-edit-vacation").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarEditVacaciones();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    Swal.fire({
                        title: '¿Esta seguro de realizar el cambio?',
                        text: "Los datos serán reemplazados",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar!',
                        cancelButtonText: 'Cancelar!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            registrar_vacacionesEditadas();
                       
                        }
                
                      })   
                    // registrar_vacacionesEditadas();//funcion registrar vacaciones
                }
				 
			});
    $("#btn-new-uma").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarUmas();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    registrar_umas();//funcion registrar vacaciones
                }
				 
			});
    $("#btn-edit-uma").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarUmasEditada();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    Swal.fire({
                        title: '¿Esta seguro de realizar el cambio?',
                        text: "Los datos serán reemplazados",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar!',
                        cancelButtonText: 'Cancelar!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            registrar_umasEditada();
                       
                        }
                
                      })   
                    // registrar_umasEditada();//funcion registrar vacaciones
                }
				 
			});
    $("#btn-new-empresa").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarEmpresa();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    registrar_empresa();//funcion registrar vacaciones
                }
				 
			});
    $("#btn-edit-empresa").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarEmpresaEditada();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    Swal.fire({
                        title: '¿Esta seguro de realizar el cambio?',
                        text: "Los datos serán reemplazados",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar!',
                        cancelButtonText: 'Cancelar!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            registrar_empresaEditada();
                       
                        }
                
                      })   
                    // registrar_empresaEditada();//funcion registrar vacaciones
                }
				 
			});
    $("#btn-new-isr").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarIsr();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    registrar_isr();//funcion registrar vacaciones
                }
				 
			});
    $("#btn-edit-isr").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarIsrEditado();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    Swal.fire({
                        title: '¿Esta seguro de realizar el cambio?',
                        text: "Los datos serán reemplazados",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar!',
                        cancelButtonText: 'Cancelar!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            registrar_isrEditado();
                       
                        }
                
                      })   
                    // registrar_isrEditado();//funcion registrar vacaciones
                }
				 
			});
    $("#btn-new-ispt").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarIspt();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    registrar_ispt();//funcion registrar vacaciones
                }
				 
			});
    $("#btn-edit-ispt").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarIsptEditado();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    Swal.fire({
                        title: '¿Esta seguro de realizar el cambio?',
                        text: "Los datos serán reemplazados",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar!',
                        cancelButtonText: 'Cancelar!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            registrar_isptEditado();
                       
                        }
                
                      })   
                    // registrar_isptEditado();//funcion registrar vacaciones
                }
				 
			});
    $("#btn-new-isrAsimi").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarIsrAsimilado();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                   
                     registrar_isrAsimilado();//funcion registrar vacaciones
                }
				 
			});
            
    $("#btn-edit-isrAsimi").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarIsrAsimiladoEditado();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    Swal.fire({
                        title: '¿Esta seguro de realizar el cambio?',
                        text: "Los datos serán reemplazados",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar!',
                        cancelButtonText: 'Cancelar!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            registrar_isrAsimiladoEditado();
                       
                        }
                
                      })   
                    // registrar_isrAsimiladoEditado();//funcion registrar vacaciones
                }
				 
			});


    // EMPIEZA LA PARTE DE FRANK

    $("#btn-new-tsubsidio").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=Validartsubsidio();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    registrar_tsubsidio();//funcion registrar vacaciones
                }
				 
            });
    $("#btn-edit-tsubsidio").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidartsubsidioEditada();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    Swal.fire({
                        title: '¿Esta seguro de realizar el cambio?',
                        text: "Los datos serán reemplazados",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar!',
                        cancelButtonText: 'Cancelar!'

                      }).then((result) => {
                        if (result.isConfirmed) {
                            registrar_tsubsidioEditada();
                       
                        }
                
                      })
                    // registrar_tsubsidioEditada();//funcion registrar vacaciones
                }
				 
            });
    $("#btn-new-tsubsidioasimilados").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=Validartsubsidioasimilados();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    registrar_tsubsidioasimilados();//funcion registrar vacaciones
                }
				 
            });
    $("#btn-edit-tsubsidioasimilados").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidartsubsidioasimiladosEditada();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    Swal.fire({
                        title: '¿Esta seguro de realizar el cambio?',
                        text: "Los datos serán reemplazados",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar!',
                        cancelButtonText: 'Cancelar!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            registrar_tsubsidioasimiladosEditada();
                       
                        }
                
                      })
                    // registrar_tsubsidioasimiladosEditada();//funcion registrar vacaciones
                }
				 
            });
    $("#btn-new-impuestonomina").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarImpuestonomina();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    registrar_Impuestonomina();//funcion registrar vacaciones
                }
				 
            });
    $("#btn-edit-impuestonomina").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarImpuestonominaEditada();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    Swal.fire({
                        title: '¿Esta seguro de realizar el cambio?',
                        text: "Los datos serán reemplazados",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar!',
                        cancelButtonText: 'Cancelar!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            registrar_ImpuestonominaEditada();
                       
                        }
                
                      })   
                    // registrar_ImpuestonominaEditada();//funcion registrar vacaciones
                }
				 
            });
    $("#btn-new-salario").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarSalario();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    registrar_Salario();//funcion registrar vacaciones
                }
				 
            });
    $("#btn-edit-salario").click(function() //cuando el user haga clic en el boton guardar
			{
                var resultado=ValidarSalarioEditada();//result es igual a lo que arroje validar puede ser true o false
                if (resultado==true)//si resulta true, inserta el vacaciones
                {
                    Swal.fire({
                        title: '¿Esta seguro de realizar el cambio?',
                        text: "Los datos serán reemplazados",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar!',
                        cancelButtonText: 'Cancelar!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            registrar_SalarioEditada();
                       
                        }
                
                      })   
                    // registrar_SalarioEditada();//funcion registrar vacaciones
                }
				 
            });
    /*EDITADO BTN INICIO*/
    $("#btn-new-salarios").click(function() //cuando el user haga clic en el boton guardar
    {
        var resultado=ValidarSalarios();//result es igual a lo que arroje validar puede ser true o false
        if (resultado==true)//si resulta true, inserta el vacaciones
        {
            registrar_Salarios();//funcion registrar vacaciones
        }
         
    });
    $("#btn-edit-salarios").click(function() //cuando el user haga clic en el boton guardar
    {
        var resultado=ValidarSalariosEditada();//result es igual a lo que arroje validar puede ser true o false
        if (resultado==true)//si resulta true, inserta el vacaciones
        {
            registrar_SalariosEditada();//funcion registrar vacaciones
        }
         
    });
    $("#btn-new-Subsidio").click(function() //cuando el user haga clic en el boton guardar
    {
        var resultado=ValidarSubsidio();//result es igual a lo que arroje validar puede ser true o false
        if (resultado==true)//si resulta true, inserta el vacaciones
        {
            registrar_Subsidio();//funcion registrar vacaciones
        }
         
    });
    $("#btn-edit-Subsidio").click(function() //cuando el user haga clic en el boton guardar
    {
        var resultado=ValidarSubsidioEditado();//result es igual a lo que arroje validar puede ser true o false
        if (resultado==true)//si resulta true, inserta el vacaciones
        {
            Swal.fire({
                title: '¿Esta seguro de realizar el cambio?',
                text: "Los datos serán reemplazados",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmar!',
                cancelButtonText: 'Cancelar!'
              }).then((result) => {
                if (result.isConfirmed) {
                    registrar_SubsidioEditado();
               
                }
        
              })
            // registrar_SubsidioEditado();//funcion registrar vacaciones
        }
         
    });
});

// FUNCIONES PARA VALIDAR

function ValidarEmpleado()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var nameEmployee = document.getElementById("nameEmployee").value;
                var idProfile = document.getElementById("idProfile").value;	
                var employeeAccount = document.getElementById("employeeAccount").value;	
                var employeePass = document.getElementById("employeePass").value;
                var employeeEmail = document.getElementById("employeeEmail").value;
                if(nameEmployee == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo NOMBRE DEL EMPLEADO, no puede quedar vacío.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#nameEmployee").focus();
                }
                else
                {
                    if(employeeAccount == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo CUENTA DEL EMPLEADO, no puede quedar vacío.",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#employeeAccount").focus();
                    }
                    else
                    {
                        if(employeeEmail == "")
                        {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo de CORREO ELECTRONICO, no puede quedar vacío.",
                                    timer: 4000
                
                                    })
                
                                validado= false;
                                $("#employeeEmail").focus();
                        }  
                        else{
                            var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
                            var esValido=expReg.test(employeeEmail)
                            if(esValido==false){
                                cuteToast({
                                    type: "error",
                                    message: "El correo no es valido. Ingrese un correo con la estructura ejemplo@ejemplo.com",
                                    timer: 5000
                    
                                    })
                    
                                    validado= false;
                                    $("#employeeEmail").focus();
                            } 
                            else
                            {
                                if(employeePass == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo CONTRASEÑA, no puede quedar vacío.",
                                    timer: 4000
                
                                    })
                
                                    validado= false;
                                    $("#employeePass").focus();
                                }
                                else
                                {
                                    validado=true;//si todo los campos estan llenos, retornamos true, mientras no, sera un false
                                }
                            }
                        }                                                                     
                    }
                }
               return validado;// retornamos el resultado
}

function validar_email( email ) 
{
    var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    var esValido=expReg.test()
    return regex.test(email) ? true : false;
}

function registrar_Empleado()
{
    var datos = $('#form-nuevoEmpleado').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/addNewEmployee.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "usuariosdelsistema.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                   alert("Hubo un error");
               }
            			
			}
											
    });
}

function ValidarPerfil()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var profileName = document.getElementById("profileName").value;
                var profileDesc = document.getElementById("profileDesc").value;	
                if(profileName == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo TIPO PERFIL, no puede quedar vacío.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#profileName").focus();
                }
                else
                {
                    if(profileDesc == "" )
                    {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo DESCRIPCIÓN PERFIL, no puede quedar vacío.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#profileDesc").focus();
                    }
                        else{
                   
                                validado=true;//si todo los campos estan llenos, retornamos true, mientras no, sera un false
                            }
                }
                return validado;// retornamos el resultado
}
                    
              


function registrar_Perfil()
{
    var datos = $('#form-new-perfil').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/agregarNuevoPerfil.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "perfilesUsuario.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                   alert("Hubo un error");
               }
            			
			}
											
    });
}

function ValidarPerfilEditado()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var profileName = document.getElementById("profileName").value;
                var profileDesc = document.getElementById("profileDesc").value;	
                if(profileName == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo TIPO PERFIL, no puede quedar vacío.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#profileName").focus();
                }
                else
                {
                    if(profileDesc == "" )
                    {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo DESCRIPCIÓN PERFIL, no puede quedar vacío.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#profileDesc").focus();
                    }
                        else{
                   
                                validado=true;//si todo los campos estan llenos, retornamos true, mientras no, sera un false
                            }
                }
                return validado;// retornamos el resultado
}
                    
              


function registrar_PerfilEditado()
{
    var datos = $('#form-editperfilUsuario').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardarPerfilUsuarioEditado.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "perfilesUsuario.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                   alert("Hubo un error");
               }
            			
			}
											
    });
}

function ValidarEmpleadoEditado()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var nameEmployee = document.getElementById("nameEmployee").value;
                var idProfile = document.getElementById("idProfile").value;	
                var employeeAccount = document.getElementById("employeeAccount").value;	
                // var employeePass = document.getElementById("employeePass").value;
                var employeeEmail = document.getElementById("employeeEmail").value;
                if(nameEmployee == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo NOMBRE EMPLEADO, no puede quedar vacío.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#nameEmployee").focus();
                }
                else
                {
                    if(employeeAccount == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo CUENTA EMPLEADO, no puede quedar vacío.",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#employeeAccount").focus();
                    }
                    else
                    {       
                        if(employeeEmail == "")
                        {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo de CORREO ELECTRONICO, no puede quedar vacío.",
                                    timer: 4000
                
                                    })
                
                                validado= false;
                                $("#employeeEmail").focus();
                        }  
                        else{
                            var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
                            var esValido=expReg.test(employeeEmail)
                            if(esValido==false){
                                cuteToast({
                                    type: "error",
                                    message: "El correo no es valido. Ingrese un correo con la estructura ejemplo@ejemplo.com",
                                    timer: 5000
                    
                                    })
                    
                                    validado= false;
                                    $("#employeeEmail").focus();
                            } 
                            else
                            {                                                                
                                    validado=true;//si todo los campos estan llenos, retornamos true, mientras no, sera un false                                
                            }
                        }                                                                     
                    }
                }                                                                                        
               return validado;// retornamos el resultado

}
function registrar_EmpleadoEditado()
{
    var datos = $('#form-editarUsuario').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardarUsuarioEditado.php', // url del archivo q va a procesar los datos
       
       

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
                         window.location.href = "usuariosdelsistema.php";//redirigimos a index despues de 3 segundos
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


function ValidarVacaciones()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var aniominimo = document.getElementById("aniominimo").value;
                var aniomaximo = document.getElementById("aniomaximo").value;	
                var diasvacaciones = document.getElementById("diasvacaciones").value;	
                var prima = document.getElementById("prima").value;
                
                if(aniominimo == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo Años minimos, Ingrese solo números",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#aniominimo").focus();
                }
                else
                {
                    if(aniomaximo == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo Años Máximos. Ingrese solo números",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#aniomaximo").focus();
                    }
                    else
                    {
                        if(diasvacaciones == "")
                        {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo de Dias de vacaciones. Ingrese solo números",
                                timer: 4000
            
                                })
            
                                validado= false;
                                $("#diasvacaciones").focus();
                        }
                        else
                        {
                            if(prima == "")
                            {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo de Prima. Ingrese solo números",
                                    timer: 4000
                
                                    })
                
                                validado= false;
                                $("#prima").focus();
                            }
                            else
                            {
                                validado=true;//si todo los campos estan llenos, retornamos true, mientras no, sera un false
                            }
                        }
                    }
                }
               return validado;// retornamos el resultado

}
function registrar_vacaciones()
{
    var datos = $('#form-vacaciones').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/nuevaVacacion.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "vacaciones.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                   alert("Hubo un error");
               }
            			
			}
											
    });
}
function ValidarEditVacaciones()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var aniominimo = document.getElementById("aniominimo").value;
                var aniomaximo = document.getElementById("aniomaximo").value;	
                var diasvacaciones = document.getElementById("diasvacaciones").value;	
                var prima = document.getElementById("prima").value;
                
                if(aniominimo == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo Años minimos, Ingrese solo números",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#aniominimo").focus();
                }
                else
                {
                    if(aniomaximo == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo Años Máximos. Ingrese solo números",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#aniomaximo").focus();
                    }
                    else
                    {
                        if(diasvacaciones == "")
                        {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo de Dias de vacaciones. Ingrese solo números",
                                timer: 4000
            
                                })
            
                                validado= false;
                                $("#diasvacaciones").focus();
                        }
                        else
                        {
                            if(prima == "")
                            {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo de Prima. Ingrese solo números",
                                    timer: 4000
                
                                    })
                
                                validado= false;
                                $("#prima").focus();
                            }
                            else
                            {
                                validado=true;//si todo los campos estan llenos, retornamos true, mientras no, sera un false
                            }
                        }
                    }
                }
               return validado;// retornamos el resultado

}
function registrar_vacacionesEditadas()
{
    var datos = $('#form-editarVacacion').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardaRegistroVacacionEditado.php', // url del archivo q va a procesar los datos
       
       

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
                         window.location.href = "vacaciones.php";//redirigimos a index despues de 3 segundos
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
function ValidarUmas()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var uma = document.getElementById("uma").value;
                var anio = document.getElementById("anio").value;	
            
                
                if(uma == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo UMA, Ingrese solo números",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#uma").focus();
                }
                else
                {
                    if(anio == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo Años. Ingrese solo números",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#anio").focus();
                    }
                    else{
                        validado=true
                    }
                }
               return validado;// retornamos el resultado

}
function registrar_umas()
{
    var datos = $('#form-umas').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/nuevaUma.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "umas.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                   alert("Hubo un error");
               }
            			
			}
											
    });
}
function ValidarUmasEditada()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var uma = document.getElementById("uma").value;
                var anio = document.getElementById("aniouma").value;	
            
                
                if(uma == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo UMA, Ingrese solo números",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#uma").focus();
                }
                else
                {
                    if(anio == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo Años. Ingrese solo números",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#aniouma").focus();
                    }
                    else{
                        validado=true
                    }
                }
               return validado;// retornamos el resultado

}
function registrar_umasEditada()
{
    var datos = $('#form-editarUma').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardaUmaEditada.php', // url del archivo q va a procesar los datos
       
       

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
                         window.location.href = "umas.php";//redirigimos a index despues de 3 segundos
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
function ValidarEmpresa()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var empresa = document.getElementById("empresa").value;
               
            
                
                if(empresa == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo Empresa. No debe estar vacío",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#empresa").focus();
                }
                else
                {
                    validado=true
                }
               return validado;// retornamos el resultado

}
function registrar_empresa()
{
    var datos = $('#form-empresa').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/nuevaEmpresa.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "empresas.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                Swal.fire({
                    icon: 'error',
                    title: 'NO SE PUDO AGREGAR LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "empresas.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
            			
			}
											
    });
}
function ValidarEmpresaEditada()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var empresa = document.getElementById("nombreEmpresa").value;
               
            
                
                if(empresa == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo Empresa. No debe estar vacío",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#nombreEmpresa").focus();
                }
                else
                {
                    validado=true
                }
               return validado;// retornamos el resultado

}
function registrar_empresaEditada()
{
    var datos = $('#form-editarEmpresa').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardaEmpresaEditada.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "empresas.php";//redirigimos a index despues de 3 segundos
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
function ValidarIsr()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var sueldoinf = document.getElementById("sueldoinferior").value;
                var sueldosup = document.getElementById("sueldosuperior").value;
                var limiteinf = document.getElementById("limiteinferior").value;
                var limitesup = document.getElementById("limitesuperior").value;
                var cuotafija = document.getElementById("cuotafija").value;
                var porcentaje = document.getElementById("porcentaje").value;
                var anio = document.getElementById("anioisr").value;
                // var tipo = document.getElementById("tipo").value;

               
            
                
                if(sueldoinf == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo sueldo inferior. Debe ingresar numeros",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#sueldoinferior").focus();
                }
                else
                {
                    if(sueldosup == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo sueldo superior. Debe ingresar numeros",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#sueldosuperior").focus();

                    }
                    else
                    {
                        if(limiteinf == "")
                        {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo limite inferior. Debe ingresar numeros",
                                timer: 4000
                
                             })
                             validado= false;
                             $("#limiteinferior").focus();

                        }
                        else
                        {
                            if(limitesup== "")
                            {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo limite superior. Debe ingresar numeros",
                                    timer: 4000
                    
                                 })
                                 validado= false;
                                 $("#limitesuperior").focus();
                            }
                            else
                            {
                                if(cuotafija== "")
                                {
                                    cuteToast({
                                        type: "error",
                                        message: "Revise el campo Cuota fija. Debe ingresar numeros",
                                        timer: 4000
                        
                                     })
                                     validado= false;
                                     $("#cuotafija").focus();
                                }
                                else
                                {
                                    if(porcentaje=="")
                                    {
                                        cuteToast({
                                            type: "error",
                                            message: "Revise el campo Porcentaje. Debe ingresar numeros",
                                            timer: 4000
                            
                                         })
                                         validado= false;
                                         $("#porcentaje").focus();
                                    }
                                    else
                                    {
                                        if(anio=="")
                                        {
                                            cuteToast({
                                                type: "error",
                                                message: "Revise el campo año de isr. Debe ingresar numeros",
                                                timer: 4000
                                
                                             })
                                             validado= false;
                                             $("#anioisr").focus();
                                        }
                                        else
                                        {
                                            validado=true;
                                            
                                        }
                                    }
                                }
                            }
                        }
                    }
                   
                }
               return validado;// retornamos el resultado

}
function registrar_isr()
{
    var datos = $('#form-isr').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/nuevoIsr.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "isr.php";//redirigimos a index despues de 3 segundos
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
function ValidarIsrAsimiladoEditado()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var sueldoinf = document.getElementById("sueldoinf").value;
                var sueldosup = document.getElementById("sueldosup").value;
                var limiteinf = document.getElementById("limiteinf").value;
                var limitesup = document.getElementById("limitesup").value;
                var cuotafija = document.getElementById("cuotafija").value;
                var porcentaje = document.getElementById("porcentaje").value;
                var anio = document.getElementById("anio").value;
                // var tipo = document.getElementById("tipo").value;

               
            
                
                if(sueldoinf == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo sueldo inferior. Debe ingresar numeros",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#sueldoinf").focus();
                }
                else
                {
                    if(sueldosup == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo sueldo superior. Debe ingresar numeros",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#sueldosup").focus();

                    }
                    else
                    {
                        if(limiteinf == "")
                        {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo limite inferior. Debe ingresar numeros",
                                timer: 4000
                
                             })
                             validado= false;
                             $("#limiteinf").focus();

                        }
                        else
                        {
                            if(limitesup== "")
                            {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo limite superior. Debe ingresar numeros",
                                    timer: 4000
                    
                                 })
                                 validado= false;
                                 $("#limitesup").focus();
                            }
                            else
                            {
                                if(cuotafija== "")
                                {
                                    cuteToast({
                                        type: "error",
                                        message: "Revise el campo Cuota fija. Debe ingresar numeros",
                                        timer: 4000
                        
                                     })
                                     validado= false;
                                     $("#cuotafija").focus();
                                }
                                else
                                {
                                    if(porcentaje=="")
                                    {
                                        cuteToast({
                                            type: "error",
                                            message: "Revise el campo Porcentaje. Debe ingresar numeros",
                                            timer: 4000
                            
                                         })
                                         validado= false;
                                         $("#porcentaje").focus();
                                    }
                                    else
                                    {
                                        if(anio=="")
                                        {
                                            cuteToast({
                                                type: "error",
                                                message: "Revise el campo año de isr. Debe ingresar numeros",
                                                timer: 4000
                                
                                             })
                                             validado= false;
                                             $("#anio").focus();
                                        }
                                        else
                                        {
                                            validado=true;
                                            
                                        }
                                    }
                                }
                            }
                        }
                    }
                   
                }
               return validado;// retornamos el resultado

}
function registrar_isrAsimiladoEditado()
{
    var datos = $('#form-editarIsrAsimi').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardaIsrAsimiladoEditado.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN ACTUALIZADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "isrAsimilados.php";//redirigimos a index despues de 3 segundos
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
function ValidarIspt()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;
                var limiteinf = document.getElementById("limiteinferior").value;
                var limitesup = document.getElementById("limitesuperior").value;
                var cuotafija = document.getElementById("cuotafija").value;
                var porcentaje = document.getElementById("porcentaje").value;
                var anio = document.getElementById("anioisr").value;
                // var tipo = document.getElementById("tipo").value;

               
            
                
                        if(limiteinf == "")
                        {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo limite inferior. Debe ingresar numeros",
                                timer: 4000
                
                             })
                             validado= false;
                             $("#limiteinferior").focus();

                        }
                        else
                        {
                            if(limitesup== "")
                            {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo limite superior. Debe ingresar numeros",
                                    timer: 4000
                    
                                 })
                                 validado= false;
                                 $("#limitesuperior").focus();
                            }
                            else
                            {
                                if(cuotafija== "")
                                {
                                    cuteToast({
                                        type: "error",
                                        message: "Revise el campo Cuota fija. Debe ingresar numeros",
                                        timer: 4000
                        
                                     })
                                     validado= false;
                                     $("#cuotafija").focus();
                                }
                                else
                                {
                                    if(porcentaje=="")
                                    {
                                        cuteToast({
                                            type: "error",
                                            message: "Revise el campo Porcentaje. Debe ingresar numeros",
                                            timer: 4000
                            
                                         })
                                         validado= false;
                                         $("#porcentaje").focus();
                                    }
                                    else
                                    {
                                        if(anio=="")
                                        {
                                            cuteToast({
                                                type: "error",
                                                message: "Revise el campo año de isr. Debe ingresar numeros",
                                                timer: 4000
                                
                                             })
                                             validado= false;
                                             $("#anioisr").focus();
                                        }
                                        else
                                        {
                                            validado=true;
                                            
                                        }
                                    }
                                }
                            }
                        }
                        return validado;// retornamos el resultado
}
function registrar_ispt()
{
    var datos = $('#form-ispt').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/nuevoIspt.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "ispt.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                Swal.fire({
                    icon: 'error',
                    title: 'No se registraron los datos',
                    text: 'Ocurrio un error',
                   
                  })
               }
            			
			}
											
    });
}
function ValidarIsptEditado()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var limiteinf = document.getElementById("limiteinf").value;
                var limitesup = document.getElementById("limitesup").value;
                var cuotafija = document.getElementById("cuotafija").value;
                var porcentaje = document.getElementById("porcentaje").value;
                var anio = document.getElementById("anio").value;
                // var tipo = document.getElementById("tipo").value;

               
            if(limiteinf == "")
                        {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo limite inferior. Debe ingresar numeros",
                                timer: 4000
                
                             })
                             validado= false;
                             $("#limiteinf").focus();

                        }
                        else
                        {
                            if(limitesup== "")
                            {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo limite superior. Debe ingresar numeros",
                                    timer: 4000
                    
                                 })
                                 validado= false;
                                 $("#limitesup").focus();
                            }
                            else
                            {
                                if(cuotafija== "")
                                {
                                    cuteToast({
                                        type: "error",
                                        message: "Revise el campo Cuota fija. Debe ingresar numeros",
                                        timer: 4000
                        
                                     })
                                     validado= false;
                                     $("#cuotafija").focus();
                                }
                                else
                                {
                                    if(porcentaje=="")
                                    {
                                        cuteToast({
                                            type: "error",
                                            message: "Revise el campo Porcentaje. Debe ingresar numeros",
                                            timer: 4000
                            
                                         })
                                         validado= false;
                                         $("#porcentaje").focus();
                                    }
                                    else
                                    {
                                        if(anio=="")
                                        {
                                            cuteToast({
                                                type: "error",
                                                message: "Revise el campo año de ISPT. Debe ingresar numeros",
                                                timer: 4000
                                
                                             })
                                             validado= false;
                                             $("#anio").focus();
                                        }
                                        else
                                        {
                                            validado=true;
                                            
                                        }
                                    }
                                }
                            }
                        }
                    
                        return validado;// retornamos el resultado
}
function registrar_isptEditado()
{
    var datos = $('#form-editarIspt').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardaIsptEditado.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN ACTUALIZADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "ispt.php";//redirigimos a index despues de 3 segundos
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
function ValidarIsrAsimilado()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var sueldoinf = document.getElementById("sueldoinferior").value;
                var sueldosup = document.getElementById("sueldosuperior").value;
                var limiteinf = document.getElementById("limiteinferior").value;
                var limitesup = document.getElementById("limitesuperior").value;
                var cuotafija = document.getElementById("cuotafija").value;
                var porcentaje = document.getElementById("porcentaje").value;
                var anio = document.getElementById("anioisr").value;
                // var tipo = document.getElementById("tipo").value;

               
            
                
                if(sueldoinf == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo sueldo inferior. Debe ingresar numeros",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#sueldoinferior").focus();
                }
                else
                {
                    if(sueldosup == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo sueldo superior. Debe ingresar numeros",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#sueldosuperior").focus();

                    }
                    else
                    {
                        if(limiteinf == "")
                        {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo limite inferior. Debe ingresar numeros",
                                timer: 4000
                
                             })
                             validado= false;
                             $("#limiteinferior").focus();

                        }
                        else
                        {
                            if(limitesup== "")
                            {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo limite superior. Debe ingresar numeros",
                                    timer: 4000
                    
                                 })
                                 validado= false;
                                 $("#limitesuperior").focus();
                            }
                            else
                            {
                                if(cuotafija== "")
                                {
                                    cuteToast({
                                        type: "error",
                                        message: "Revise el campo Cuota fija. Debe ingresar numeros",
                                        timer: 4000
                        
                                     })
                                     validado= false;
                                     $("#cuotafija").focus();
                                }
                                else
                                {
                                    if(porcentaje=="")
                                    {
                                        cuteToast({
                                            type: "error",
                                            message: "Revise el campo Porcentaje. Debe ingresar numeros",
                                            timer: 4000
                            
                                         })
                                         validado= false;
                                         $("#porcentaje").focus();
                                    }
                                    else
                                    {
                                        if(anio=="")
                                        {
                                            cuteToast({
                                                type: "error",
                                                message: "Revise el campo año de isr. Debe ingresar numeros",
                                                timer: 4000
                                
                                             })
                                             validado= false;
                                             $("#anioisr").focus();
                                        }
                                        else
                                        {
                                            validado=true;
                                            
                                        }
                                    }
                                }
                            }
                        }
                    }
                   
                }
               return validado;// retornamos el resultado

}
function registrar_isrAsimilado()
{
    var datos = $('#form-isrAsimi').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/nuevoIsrAsimilado.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "isrAsimilados.php";//redirigimos a index despues de 3 segundos
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
function ValidarIsrEditado()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var sueldoinf = document.getElementById("sueldoinf").value;
                var sueldosup = document.getElementById("sueldosup").value;
                var limiteinf = document.getElementById("limiteinf").value;
                var limitesup = document.getElementById("limitesup").value;
                var cuotafija = document.getElementById("cuotafija").value;
                var porcentaje = document.getElementById("porcentaje").value;
                var anio = document.getElementById("anio").value;
                // var tipo = document.getElementById("tipo").value;

               
            
                
                if(sueldoinf == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo sueldo inferior. Debe ingresar numeros",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#sueldoinf").focus();
                }
                else
                {
                    if(sueldosup == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo sueldo superior. Debe ingresar numeros",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#sueldosup").focus();

                    }
                    else
                    {
                        if(limiteinf == "")
                        {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo limite inferior. Debe ingresar numeros",
                                timer: 4000
                
                             })
                             validado= false;
                             $("#limiteinf").focus();

                        }
                        else
                        {
                            if(limitesup== "")
                            {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo limite superior. Debe ingresar numeros",
                                    timer: 4000
                    
                                 })
                                 validado= false;
                                 $("#limitesup").focus();
                            }
                            else
                            {
                                if(cuotafija== "")
                                {
                                    cuteToast({
                                        type: "error",
                                        message: "Revise el campo Cuota fija. Debe ingresar numeros",
                                        timer: 4000
                        
                                     })
                                     validado= false;
                                     $("#cuotafija").focus();
                                }
                                else
                                {
                                    if(porcentaje=="")
                                    {
                                        cuteToast({
                                            type: "error",
                                            message: "Revise el campo Porcentaje. Debe ingresar numeros",
                                            timer: 4000
                            
                                         })
                                         validado= false;
                                         $("#porcentaje").focus();
                                    }
                                    else
                                    {
                                        if(anio=="")
                                        {
                                            cuteToast({
                                                type: "error",
                                                message: "Revise el campo año de isr. Debe ingresar numeros",
                                                timer: 4000
                                
                                             })
                                             validado= false;
                                             $("#anio").focus();
                                        }
                                        else
                                        {
                                            validado=true;
                                            
                                        }
                                    }
                                }
                            }
                        }
                    }
                   
                }
               return validado;// retornamos el resultado

}
function registrar_isrEditado()
{
    var datos = $('#form-editarIsr').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardaIsrEditado.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN ACTUALIZADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "isr.php";//redirigimos a index despues de 3 segundos
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
// EMPIEZA LA PARTE DE FRANK
/*tsubsidio*/
function Validartsubsidio()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var sueldoinf = document.getElementById("sueldoinf").value;
                var sueldosup = document.getElementById("sueldosup").value;	
                var limiteinf = document.getElementById("limiteinf").value;                
                var limitesup = document.getElementById("limitesup").value; 
                var subsidio = document.getElementById("subsidio").value;	
                var Anio = document.getElementById("Anio").value;                
                // var tipo = document.getElementById("tipo").value;

                if(sueldoinf == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo SUELDO INFERIOR. Ingrese solo números.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#sueldoinf").focus();
                }
                else
                {
                    if(sueldosup == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo SUELDO SUPERIOR. Ingrese solo números.",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#sueldosup").focus();
                    }  
                    else{                                               
                            if(limiteinf == "")
                            {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo LIMITE INFERIOR. Ingrese solo números.",
                                timer: 4000
                                })
            
                            validado= false;
                            $("#limiteinf").focus();
                            } 
                            else{
                                if(limitesup == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo LIMITE SUPERIOR. Ingrese solo números.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#limitesup").focus();
                                } 
                                else{
                                    if(subsidio == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo SUBSIDIO. Ingrese solo números.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#subsidio").focus();
                                } 
                                else{
                                    if(Anio == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo AÑO. Ingrese solo números enteros.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#Anio").focus();
                                }
                                else{
                                    validado=true;
                                }
                                }
                                }
                                }
                            }                                                                            
                    }
                    return validado;// retornamos el resultado                                      
                }
              



function registrar_tsubsidio()
{
    var datos = $('#form-tsubsidio').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/nuevotsubsidio.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "tsubsidio.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                   alert("Hubo un error");                   
               }
            			
			}
											
    });
}
function ValidartsubsidioEditada()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;   
                var sueldoinf = document.getElementById("sueldoinf").value;
                var sueldosup = document.getElementById("sueldosup").value;	
                var limiteinf = document.getElementById("limiteinf").value;                
                var limitesup = document.getElementById("limitesup").value; 
                var subsidio = document.getElementById("subsidio").value;	
                var Anio = document.getElementById("Anio").value;                
                // var tipo = document.getElementById("tipo").value;

                if(sueldoinf == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo SUELDO INF. Ingrese solo números.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#sueldoinf").focus();
                }
                else
                {
                    if(sueldosup == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo SUELDO SUP. Ingrese solo números.",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#sueldosup").focus();
                    }  
                    else{                                               
                            if(limiteinf == "")
                            {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo LIMITE INF. Ingrese solo números.",
                                timer: 4000
                                })
            
                            validado= false;
                            $("#limiteinf").focus();
                            } 
                            else{
                                if(limitesup == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo LIMITE SUP. Ingrese solo números.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#limitesup").focus();
                                } 
                                else{
                                    if(subsidio == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo SUBSIDIO. Ingrese solo números.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#subsidio").focus();
                                } 
                                else{
                                    if(Anio == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo AÑO. Ingrese solo números enteros.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#Anio").focus();
                                }
                                else{
                                    validado=true;
                                }
                                
                                }
                                }
                            }                                                                            
                    }                                      
                }
               return validado;// retornamos el resultado

}

function registrar_tsubsidioEditada()
{
    var datos = $('#form-editartsubsidio').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardatsubsidioEditada.php', // url del archivo q va a procesar los datos
       
       

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
                         window.location.href = "tsubsidio.php";//redirigimos a index despues de 3 segundos
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
/*tsubsidioasimilados*/
function Validartsubsidioasimilados()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var sueldoinf = document.getElementById("sueldoinf").value;
                var sueldosup = document.getElementById("sueldosup").value;	
                var limiteinf = document.getElementById("limiteinf").value;                
                var limitesup = document.getElementById("limitesup").value; 
                var subsidio = document.getElementById("subsidio").value;	
                var Anio = document.getElementById("Anio").value;                
                // var tipo = document.getElementById("tipo").value;

                if(sueldoinf == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo SUELDO INFERIOR. Ingrese solo números.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#sueldoinf").focus();
                }
                else
                {
                    if(sueldosup == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo SUELDO SUPERIOR. Ingrese solo números.",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#sueldosup").focus();
                    }  
                    else{                                               
                            if(limiteinf == "")
                            {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo LIMITE INFERIOR. Ingrese solo números.",
                                timer: 4000
                                })
            
                            validado= false;
                            $("#limiteinf").focus();
                            } 
                            else{
                                if(limitesup == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo LIMITE SUPERIOR. Ingrese solo números.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#limitesup").focus();
                                } 
                                else{
                                    if(subsidio == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo SUBSIDIO. Ingrese solo números.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#subsidio").focus();
                                } 
                                else{
                                    if(Anio == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo AÑO. Ingrese solo números enteros.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#Anio").focus();
                                }
                                
                                   
                                else{
                                    validado=true;
                                
                                }
                                }
                                }
                            }                                                                            
                    }                                      
                }
               return validado;// retornamos el resultado

}

function registrar_tsubsidioasimilados()
{
    var datos = $('#form-tsubsidioasimilados').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/nuevotsubsidioasimilados.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "tsubsidioasimilados.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                   alert("Hubo un error");                   
               }
            			
			}
											
    });
}
function ValidartsubsidioasimiladosEditada()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;   
                var sueldoinf = document.getElementById("sueldoinf").value;
                var sueldosup = document.getElementById("sueldosup").value;	
                var limiteinf = document.getElementById("limiteinf").value;                
                var limitesup = document.getElementById("limitesup").value; 
                var subsidio = document.getElementById("subsidio").value;	
                var Anio = document.getElementById("Anio").value;                
                // var tipo = document.getElementById("tipo").value;

                if(sueldoinf == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo SUELDO INFERIOR. Ingrese solo números.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#sueldoinf").focus();
                }
                else
                {
                    if(sueldosup == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo SUELDO SUPERIOR. Ingrese solo números.",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#sueldosup").focus();
                    }  
                    else{                                               
                            if(limiteinf == "")
                            {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo LIMITE INFERIOR. Ingrese solo números.",
                                timer: 4000
                                })
            
                            validado= false;
                            $("#limiteinf").focus();
                            } 
                            else{
                                if(limitesup == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo LIMITE SUPERIOR. Ingrese solo números.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#limitesup").focus();
                                } 
                                else{
                                    if(subsidio == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo SUBSIDIO. Ingrese solo números.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#subsidio").focus();
                                } 
                                else{
                                    if(Anio == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo AÑO. Ingrese solo números enteros.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#Anio").focus();
                                }
                                
                                   
                                else{
                                    validado=true;
                                }
                                
                                }
                                }
                            }                                                                            
                    }                                      
                }
               return validado;// retornamos el resultado

}

function registrar_tsubsidioasimiladosEditada()
{
    var datos = $('#form-editartsubsidioasimilados').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardatsubsidioasimiladosEditada.php', // url del archivo q va a procesar los datos
       
       

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
                         window.location.href = "tsubsidioasimilados.php";//redirigimos a index despues de 3 segundos
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

/*Impuesto nomina*/
function ValidarImpuestonomina()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var estado = document.getElementById("estado").value;
                var porcentaje = document.getElementById("porcentaje").value;	
                var descripcion = document.getElementById("descripcion").value;                
                var anio = document.getElementById("anio").value; 
                
                if(estado == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo ESTADO, no puede quedar vacío.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#estado").focus();
                }
                else
                {
                    if(porcentaje == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo PORCENTAJE. Ingrese solo números.",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#porcentaje").focus();
                    }  
                    else{                                               
                            if(descripcion == "")
                            {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo DESCRIPCION. no puede quedar vacío.",
                                timer: 4000
                                })
            
                            validado= false;
                            $("#descripcion").focus();
                            } 
                            else{
                                if(anio == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo AÑO. Ingrese solo números.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#anio").focus();
                                } 
                                else{
                                    validado=true;
                                }
                            }                                                                            
                    }                                      
                }
               return validado;// retornamos el resultado

}

function registrar_Impuestonomina()
{
    var datos = $('#form-impues tonomina').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/nuevoimpuestonomina.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "impuestonomina.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                   alert("Hubo un error");                   
               }
            			
			}
											
    });
}
function ValidarImpuestonominaEditada()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;   
                var estado = document.getElementById("estado").value;
                var porcentaje = document.getElementById("porcentaje").value;	
                var descripcion = document.getElementById("descripcion").value;                
                var anio = document.getElementById("anio").value;                           
                
                if(estado == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo ESTADO, no puede quedar vacío.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#estado").focus();
                }
                else
                {
                    if(porcentaje == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo PORCENTAJE. Ingrese solo números.",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#porcentaje").focus();
                    }  
                    else{                                               
                            if(descripcion == "")
                            {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo DESCRIPCION. no puede quedar vacío.",
                                timer: 4000
                                })
            
                            validado= false;
                            $("#descripcion").focus();
                            } 
                            else{
                                if(anio == "")
                                {
                                cuteToast({
                                    type: "error",
                                    message: "Revise el campo AÑO. Ingrese solo números.",
                                    timer: 4000
                                    })
            
                                validado= false;
                                $("#anio").focus();
                                } 
                                else{
                                    validado=true;
                                }
                            }                                                                            
                    }                                      
                }
               return validado;// retornamos el resultado

}

function registrar_ImpuestonominaEditada()
{
    var datos = $('#form-editarimpuestonomina').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardaimpuestonominaEditada.php', // url del archivo q va a procesar los datos
       
       

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
                         window.location.href = "impuestonomina.php";//redirigimos a index despues de 3 segundos
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
/*Salario*/
function ValidarSalario()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var anio = document.getElementById("anio").value;
                var zona = document.getElementById("zona").value;	
                var valor = document.getElementById("valor").value;                
            
                
                if(anio == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo año, Ingrese solo números enteros",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#anio").focus();
                }
                else
                {
                    if(zona == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo Zona. No puede quedar vacío.",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#zona").focus();
                    }  
                    else{                                               
                            if(valor == "")
                            {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo valor. Ingrese solo números",
                                timer: 4000
                                })
            
                            validado= false;
                            $("#valor").focus();
                            } 
                            else{
                                validado=true;
                            }                                                                            
                    }                                      
                }
               return validado;// retornamos el resultado

}

function registrar_Salario()
{
    var datos = $('#form-salario').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/nuevoSalario.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "salario.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                   alert("Hubo un error");                   
               }
            			
			}
											
    });
}

function ValidarSalarioEditada()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var anio = document.getElementById("anio").value;
                var zona = document.getElementById("zona").value;	
                var valor = document.getElementById("valor").value;	
            
                
                if(anio == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo AÑO, Ingrese solo números enteros",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#anio").focus();
                }
                else
                {
                    if(zona == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo ZONA. No puede quedar vacío.",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#zona").focus();
                    }
                    else{
                        if(valor == "")
                        {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo VALOR. Ingrese solo números",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#valor").focus();
                        }
                        else
                        {
                            validado=true;
                        }
                    }                    
                }
               return validado;// retornamos el resultado

}

function registrar_SalarioEditada()
{
    var datos = $('#form-editarSalario').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardaSalarioEditada.php', // url del archivo q va a procesar los datos
       
       

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
                         window.location.href = "salario.php";//redirigimos a index despues de 3 segundos
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

/*EDITADO FUNCIONES INICIO*/
/*Salarios*/
function ValidarSalarios()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var anio = document.getElementById("anio").value;
                var zonaA = document.getElementById("zonaA").value;	
                var zonaB = document.getElementById("zonaB").value;
                var zonaC = document.getElementById("zonaC").value;
            
                
                if(anio == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo año, Ingrese solo números enteros",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#anio").focus();
                }
                else
                {
                    if(zonaA == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo Zona A. Ingrese solo números",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#zonaA").focus();
                    }  
                    else{
                        if(zonaB == "")
                        {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo Zona B. Ingrese solo números",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#zonaB").focus();
                        } 
                        else{
                            if(zonaC == "")
                            {
                            cuteToast({
                                type: "error",
                                message: "Revise el campo Zona C. Ingrese solo números",
                                timer: 4000
                                })
            
                            validado= false;
                            $("#zonaC").focus();
                            } 
                            else{
                                validado=true;
                            }                            
                        }                         
                    }                                      
                }
               return validado;// retornamos el resultado

}

function registrar_Salarios()
{
    var datos = $('#form-salarios').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/nuevoSalarios.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "salarios.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                   alert("Hubo un error");                   
               }
            			
			}
											
    });
}

function ValidarSalariosEditada()//funcion para validar los campos antes de mandar los datos al ajax
{
                var validado = false;            
                var zonaA = document.getElementById("zonaA").value;
                var zonaB = document.getElementById("zonaB").value;	
                var zonaC = document.getElementById("zonaC").value;	
            
                
                if(zonaA == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Revise el campo ZONA A, Ingrese solo números",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#uma").focus();
                }
                else
                {
                    if(zonaB == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo ZONA B. Ingrese solo números",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#aniouma").focus();
                    }
                    else{
                        if(zonaC == "")
                        {
                        cuteToast({
                            type: "error",
                            message: "Revise el campo ZONA C. Ingrese solo números",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#aniouma").focus();
                        }
                        else
                        {
                            validado=true;
                        }
                    }                    
                }
               return validado;// retornamos el resultado

}

function registrar_SalariosEditada()
{
    var datos = $('#form-editarSalarios').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardaSalariosEditada.php', // url del archivo q va a procesar los datos
       
       

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
                         window.location.href = "salarios.php";//redirigimos a index despues de 3 segundos
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
function ValidarSubsidio()
{
    var validado = false;            
    var ingdesde = document.getElementById("ingdesde").value;
    var inghasta = document.getElementById("inghasta").value;	
    var credito = document.getElementById("credito").value;
    var anio = document.getElementById("anio").value;

    if(ingdesde=="")
    {
        cuteToast({
            type: "error",
            message: "Revise el campo Ingresos desde, Ingrese solo números enteros",
            timer: 4000

         })
         validado= false;
         $("#ingdesde").focus();

    }
    else{
        if(inghasta=="")
        {
            cuteToast({
                type: "error",
                message: "Revise el campo Ingresos hasta, Ingrese solo números enteros",
                timer: 4000

             })
             validado= false;
             $("#inghasta").focus();

        }
        else{
            if(credito=="")
            {
                cuteToast({
                    type: "error",
                    message: "Revise el campo credito, Ingrese solo números enteros",
                    timer: 4000
    
                 })
                 validado= false;
                 $("#credito").focus();
            }
            else{
                if(anio=="")
                {
                    cuteToast({
                        type: "error",
                        message: "Revise el campo año, Ingrese solo números enteros",
                        timer: 4000
        
                     })
                     validado= false;
                     $("#anio").focus();
                }
                else{
                    validado=true;
                }
            }
        }
    }
    return validado;
}
function registrar_Subsidio()
{
    var datos = $('#form-subsidio').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/nuevoSubsidio.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN GUARDADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "subsidios.php";//redirigimos a index despues de 3 segundos
                     }, 2000); 
               }
               else{
                   alert("Hubo un error");                   
               }
            			
			}
											
    });   
}
function ValidarSubsidioEditado()
{
    var validado = false;            
    var ingdesde = document.getElementById("ingdesde").value;
    var inghasta = document.getElementById("inghasta").value;	
    var credito = document.getElementById("credito").value;
    var anio = document.getElementById("anio").value;

    if(ingdesde=="")
    {
        cuteToast({
            type: "error",
            message: "Revise el campo Ingresos desde, Ingrese solo números enteros",
            timer: 4000

         })
         validado= false;
         $("#ingdesde").focus();

    }
    else{
        if(inghasta=="")
        {
            cuteToast({
                type: "error",
                message: "Revise el campo Ingresos hasta, Ingrese solo números enteros",
                timer: 4000

             })
             validado= false;
             $("#inghasta").focus();

        }
        else{
            if(credito=="")
            {
                cuteToast({
                    type: "error",
                    message: "Revise el campo credito, Ingrese solo números enteros",
                    timer: 4000
    
                 })
                 validado= false;
                 $("#credito").focus();
            }
            else{
                if(anio=="")
                {
                    cuteToast({
                        type: "error",
                        message: "Revise el campo año, Ingrese solo números enteros",
                        timer: 4000
        
                     })
                     validado= false;
                     $("#anio").focus();
                }
                else{
                    validado=true;
                }
            }
        }
    }
    return validado;
}
function registrar_SubsidioEditado()
{
    var datos = $('#form-subsidioEditado').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/guardaSubsidioEditado.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                Swal.fire({
                    icon: 'success',
                    title: 'SE HAN ACTUALIZADO LOS DATOS',
                    
                   
                  })
                     setTimeout(function(){
                         window.location.href = "subsidios.php";//redirigimos a index despues de 3 segundos
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


