// Recorrer los elementos y hacer que onchange ejecute una funcion para comprobar el valor de ese input
(function(){

var formulario = document.formularioeditarUsuario,
	elementos = formulario.elements;

// Funcion que se ejecuta cuando el evento click es activado

var validarInputs = function(){
	for (var i = 0; i < elementos.length; i++) {
		// Identificamos si el elemento es de tipo texto, email, password, radio o checkbox
		if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password") {
			// Si es tipo texto, email o password vamos a comprobar que esten completados los input
			if (elementos[i].value.length == 0) {
				console.log('El campo ' + elementos[i].name + ' esta incompleto');
				elementos[i].className = elementos[i].className + " error";
				return false;
			} else {
				elementos[i].className = elementos[i].className.replace(" error", "");
			}
		}
	}

	// Comprobando que las contraseñas coincidan
	if (elementos.pass.value !== elementos.pass2.value) {
		elementos.pass.value = "";
		elementos.pass2.value = "";
		elementos.pass.className = elementos.pass.className + " error";
		elementos.pass2.className = elementos.pass2.className + " error";
	} else {
		elementos.pass.className = elementos.pass.className.replace(" error", "");
		elementos.pass2.className = elementos.pass2.className.replace(" error", "");
	}

	return true;
};

var validarRadios = function(){
	var opciones = document.getElementsByName('sexo'),
		resultado = false;

	for (var i = 0; i < elementos.length; i++) {
		if(elementos[i].type == "radio" && elementos[i].name == "sexo"){
			// Recorremos los radio button
			for (var o = 0; o < opciones.length; o++) {
				if (opciones[o].checked) {
					resultado = true;
					break;
				}
			}

			if (resultado == false) {
				elementos[i].parentNode.className = elementos[i].parentNode.className + " error";
				console.log('El campo sexo esta incompleto');
				return false;
			} else {
				// Eliminamos la clase Error del radio button
				elementos[i].parentNode.className = elementos[i].parentNode.className.replace(" error", "");
				return true;
			}
		}
	}
};

var validarCheckbox = function(){
	var opciones = document.getElementsByName('terminos'),
		resultado = false;

	for (var i = 0; i < elementos.length; i++) {
		if(elementos[i].type == "checkbox"){
			for (var o = 0; o < opciones.length; o++) {
				if (opciones[o].checked) {
					resultado = true;
					break;
				}
			}

			if (resultado == false) {
				elementos[i].parentNode.className = elementos[i].parentNode.className + " error";
				console.log('El campo checkbox esta incompleto');
				return false;
			} else {
				// Eliminamos la clase Error del checkbox
				elementos[i].parentNode.className = elementos[i].parentNode.className.replace(" error", "");
				return true;
			}
		}
	}
};

var enviar = function(e){
	if (!validarInputs()) {
		console.log('Falto validar los Input');
		e.preventDefault();
	} else if (!validarRadios()) {
		console.log('Falto validar los Radio Button');
		e.preventDefault();
	} else if (!validarCheckbox()) {
		console.log('Falto validar Checkbox');
		e.preventDefault();
	} else {
		console.log('Envia');
		e.preventDefault();
	}
};

var focusInput = function(){
	this.parentElement.children[1].className = "label active";
	this.parentElement.children[0].className = this.parentElement.children[0].className.replace("error", "");
};

var blurInput = function(){
	if (this.value <= 0) {
		this.parentElement.children[1].className = "label";
		this.parentElement.children[0].className = this.parentElement.children[0].className + " error";
	}
};

// --- Eventos ---
formulario.addEventListener("submit", enviar);

for (var i = 0; i < elementos.length; i++) {
	if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password") {
		elementos[i].addEventListener("focus", focusInput);
		elementos[i].addEventListener("blur", blurInput);
	}
}

}())

(function(){
	
	var formulario2 = document.formLoginUsuario,
		elementos2 = formulario2.elements;		
	
	var validarInputs2 = function(){
		for (var i = 0; i < elementos2.length; i++) {
			// Identificamos si el elemento es de tipo texto, email, password, radio o checkbox
			if (elementos2[i].type == "text" || elementos2[i].type == "email" || elementos2[i].type == "password") {
				// Si es tipo texto, email o password vamos a comprobar que esten completados los input
				if (elementos2[i].value.length == 0) {
					console.log('El campo ' + elementos2[i].name + ' esta incompleto');
					elementos2[i].className = elementos2[i].className + " error";
					return false;
				} else {
					elementos2[i].className = elementos2[i].className.replace(" error", "");
				}
			}
		}
	
		// Comprobando que las contraseñas coincidan
		if (elementos2.pass.value !== elementos2.pass2.value) {
			elementos2.pass.value = "";
			elementos2.pass2.value = "";
			elementos2.pass.className = elementos2.pass.className + " error";
			elementos2.pass2.className = elementos2.pass2.className + " error";
		} else {
			elementos2.pass.className = elementos2.pass.className.replace(" error", "");
			elementos2.pass2.className = elementos2.pass2.className.replace(" error", "");
		}
	
		return true;
	};
	
	var validarRadios2 = function(){
		var opciones = document.getElementsByName('sexo'),
			resultado = false;
	
		for (var i = 0; i < elementos2.length; i++) {
			if(elementos2[i].type == "radio" && elementos2[i].name == "sexo"){
				// Recorremos los radio button
				for (var o = 0; o < opciones.length; o++) {
					if (opciones[o].checked) {
						resultado = true;
						break;
					}
				}
	
				if (resultado == false) {
					elementos2[i].parentNode.className = elementos2[i].parentNode.className + " error";
					console.log('El campo sexo esta incompleto');
					return false;
				} else {
					// Eliminamos la clase Error del radio button
					elementos2[i].parentNode.className = elementos2[i].parentNode.className.replace(" error", "");
					return true;
				}
			}
		}
	};
	
	var validarCheckbox2 = function(){
		var opciones = document.getElementsByName('terminos'),
			resultado = false;
	
		for (var i = 0; i < elementos2.length; i++) {
			if(elementos2[i].type == "checkbox"){
				for (var o = 0; o < opciones.length; o++) {
					if (opciones[o].checked) {
						resultado = true;
						break;
					}
				}
	
				if (resultado == false) {
					elementos2[i].parentNode.className = elementos2[i].parentNode.className + " error";
					console.log('El campo checkbox esta incompleto');
					return false;
				} else {
					// Eliminamos la clase Error del checkbox
					elementos2[i].parentNode.className = elementos2[i].parentNode.className.replace(" error", "");
					return true;
				}
			}
		}
	};
	
	var enviar2 = function(e){
		if (!validarInputs2()) {
			console.log('Falto validar los Input');
			e.preventDefault();
		} else if (!validarRadios2()) {
			console.log('Falto validar los Radio Button');
			e.preventDefault();
		} else if (!validarCheckbox2()) {
			console.log('Falto validar Checkbox');
			e.preventDefault();
		} else {
			console.log('Envia');
			e.preventDefault();
		}
	};
	
	var focusInput2 = function(){
		this.parentElement.children[1].className = "label active";
		this.parentElement.children[0].className = this.parentElement.children[0].className.replace("error", "");
	};
	
	var blurInput2 = function(){
		if (this.value <= 0) {
			this.parentElement.children[1].className = "label";
			this.parentElement.children[0].className = this.parentElement.children[0].className + " error";
		}
	};
	
	// --- Eventos ---
	formulario2.addEventListener("submit", enviar2);
	
	for (var i = 0; i < elementos2.length; i++) {
		if (elementos2[i].type == "text" || elementos2[i].type == "email" || elementos2[i].type == "password") {
			elementos2[i].addEventListener("focus", focusInput2);
			elementos2[i].addEventListener("blur", blurInput2);
		}
	}}())