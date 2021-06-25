function validar (e){
    //obtener el dato que viene de la caja de texto desdeel HTML
	var correo = document.getElementById("correo").value;
    var pass = document.getElementById("password").value;	

    if(correo == ""){
        cuteToast({
            type: "error",
            message: "Ingrese su correo electronico.",
            timer: 4000

                    })
                $("#correo").focus();
                return false;                
    }
    else{
        var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
        var esValido=expReg.test(correo)
        if(esValido==false){
            cuteToast({
                type: "error",
                message: "El correo no es valido. Ingrese un correo con la estructura ejemplo@ejemplo.com",
                timer: 5000

                })

                validado= false;
                $("#correo").focus();
        }
        else{
            if(pass == ""){
                cuteToast({
                    type: "error",  
                    message: "Ingrese su contraseña.",
                    timer: 4000

                            })
                        $("#password").focus();
                        return false;
            }
            else{
                return true();
            }
        }
    }    
}

function validar_email( email ) 
{
    var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    var esValido=expReg.test()
    return regex.test(email) ? true : false;
}