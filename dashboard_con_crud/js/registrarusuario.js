$(document).ready(function(){

$("#btn-new-user").click(function() //cuando el user haga clic en el boton registrar 
			{
                var result=Validar();//result es igual a lo que arroje validar puede ser true o false
                if (result==true)//si resulta true, inserta el usuario hablando el metodo
                {
                    registrar_user();//funcion registrar usuario
                }
				 
			});



});


function registrar_user()
{
    var datos = $('#formulario_registro').serializeArray(); //serializados
    $.ajax({
        type: 'POST', //forma en que lo estas pasando
        data: datos,  //parametros serializados
        url: 'services/newUser.php', // url del archivo q va a procesar los datos
       
       

        success: function(response) //si la respuesta es exitosa
			{
                console.log(response);
                var resultado=JSON.parse(response);//parseamos el resultado a JSON
               if(resultado.respuesta == "exitoso"){//comparamos si lo que tiene el JSON es igual a exitoso
                   Swal.fire(//mandamos la alerta 
                       'registro correcto!',
                       'Bienvenid@  !!',
                       'success'
                     )
                     setTimeout(function(){
                         window.location.href = "index.php";//redirigimos a index despues de 3 segundos
                     }, 3000); 
               }
               else{
                   alert("Hubo un error");
               }
            			
			}
											
    });
}


function Validar()//funcion para validar los campos antes de mandar los datos al ajax
{
    var validado = false;            
    var nombre = document.getElementById("nombre").value;
                var cuenta = document.getElementById("cuenta").value;	
                var correo = document.getElementById("correo").value;	
                var pass = document.getElementById("password").value;                            

                if(nombre == "" )
                {
                    
                        cuteToast({
                            type: "error",
                            message: "Ingrese su nombre.",
                            timer: 4000
            
                         })
                         validado= false;
                         $("#nombre").focus();
                }
                else
                {
                    if(cuenta == "")
                    {
                        cuteToast({
                            type: "error",
                            message: "Ingrese un nombre de usuario.",
                            timer: 4000
                            })
        
                        validado= false;
                        $("#cuenta").focus();
                    }
                    else
                    {
                        if(correo == "")
                        {
                            cuteToast({
                                type: "error",
                                message: "Ingrese un correo electronico.",
                                timer: 4000
            
                                })
            
                                validado= false;
                                $("#correo").focus();
                        }
                        else
                        {
                            var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
                            var esValido=expReg.test(correo)
                            if(esValido==false){
                                cuteToast({
                                    type: "error",
                                    message: "El correo no es valido. Ingrese un correo con la estructura ejemplo@ejemplo.com",
                                    timer: 4000
                
                                    })
                
                                    validado= false;
                                    $("#correo").focus();
                            }
                            else{              
                                if(pass == "")
                                {
                                    cuteToast({
                                        type: "error",
                                        message: "Ingrese una contraseña.",
                                        timer: 4000
                    
                                        })
                    
                                    validado= false;
                                    $("#password").focus();
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