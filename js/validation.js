window.onload = function(){  //esta funcion solo se eejcutará cuando se cargue la pagina



	nombre = document.getElementById("name"); //estas variables guardan la direccion donde esta ese ID, en este caso name
	edad = document.getElementById("age");
	email = document.getElementById("email");
	email_p = document.getElementById("r_email");
	passw = document.getElementById("passw")
	password = document.getElementById("passw2")
	telef = document.getElementById("tlf");

	document.addEventListener("DOMContentLoaded", function(event) { //cuando la pagina esta cargada comprobamos el DOM del html

		console.log("DOM fully loaded and parsed"); //En la consolo de comnados aparecera que el DOM de HTML esta bien cargado
	});



	reg_nom = /(([A-Z])\w+)/;  //Aqui tenemos las expresiones regulares, la del nombre y apellido solo indican qu empieze por mayusculas
	reg_edad = /(?:\b|-)([1-9]{1,2}[0]?|100)\b/; //en este expresion, tenemos que numeros del 1 al 9 (entre corchetes) pueden aparecer 1 o 2 veces(llaves), y puede o no aparecer un 0; o esa da esta opcion o es 100, el \b es para delimitar lo que remos buscar, en este caso lo dicho anteriormente
	reg_email = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; //aqui solo es cualquier letra o digito seguido de un @ y un .____ cuantas veces quieras(por eso el +)
	reg_tlf = /^[9|6|7][0-9]{8}$/ ;
	reg_passw = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
	
	nombre.addEventListener("blur", testname); //tenemos el oyente de eventos en este caso la funcion se ejecutara cuando pinchemos fuera del input donde escribimos (por eso "blur")
	edad.addEventListener("blur", test_age);
	email.addEventListener("blur", test_email);
	email_p.addEventListener("blur", test_remail);
	
	passw.addEventListener("blur", test_passw);
	password.addEventListener("blur", test_password);
	
	telef.addEventListener("blur", test_tlf);


	
	function testname(){  //estas funciones comparan las expresiones regulares correspodientes con el valor introducido por el usuario, saldra el mensaje de error si esta mal y viceversa

		if (reg_nom.test(nombre.value)) {
			document.getElementById("e_name").innerHTML = "El nombre es correcto.";
		}else{
			document.getElementById("e_name").innerHTML = "El nombre es incorrecto.";
		
		}
	}

	
	function test_age(){
		if (reg_edad.test(edad.value)){
			document.getElementById("e_age").innerHTML = "La edad es correcto.";
		}else{
			document.getElementById("e_age").innerHTML = "La edad solo puede contener numeros.";
		}
	}

	function test_email(){
		if (reg_email.test(email.value)) {
			document.getElementById("e_email").innerHTML = "El email es correcto.";
		}else{
			document.getElementById("e_email").innerHTML = "El email es incorrecto.";
		
		}
	}

	function test_remail(){  //aqui comrpobamos que se repite el mismo correo
		if (email.value == email_p.value) {
			document.getElementById("er_email").innerHTML = "Coincide.";
		}else{
			document.getElementById("er_email").innerHTML = "El email no coincide con el anterior escrito.";
		}
	}
	
	function test_passw(){
		if (reg_passw.test(passw.value)) {
			document.getElementById("e_passw").innerHTML = "La contraseña es valida.";
		}else{
			document.getElementById("e_passw").innerHTML = "La contraseña es invalida.";
		
		}
	}

	function test_password(){  //aqui comrpobamos que se repite el mismo correo
		if (passw.value == password.value) {
			document.getElementById("er_passw").innerHTML = "Coincide.";
		}else{
			document.getElementById("er_passw").innerHTML = "La contrseña no coincide, compruebe que es la misma.";
		}
	}
	
	function test_tlf(){
		if (reg_tlf.test(telef.value)) {
			document.getElementById("e_telef").innerHTML = "El telefono es correcto.";
		}else{
			document.getElementById("e_telef").innerHTML = "El telefono es incorrecto, debe empezar por 6 o 9.";
		
		}
	}
}


function info_name(){
	document.getElementById("e_name").innerHTML = "El nombre solo debe contener letras.";
}


function info_age(){
	document.getElementById("e_age").innerHTML = "Recomendable ser +18, por si se realizan compras posteriormente.";
}

function info_email(){
	document.getElementById("e_email").innerHTML = "El email debe seguir el formato -> Ej.: pepito@____.com";
}

function info_rmail(){
	document.getElementById("er_email").innerHTML = "Repite el email que has escrito antes.";
}

function info_password(){
	document.getElementById("e_passw").innerHTML = "La contraseña debe contener minúsuclas, mayusculas y varios números.";
}

function info_passw(){
	document.getElementById("er_passw").innerHTML = "Repita la contraseña.";
}

function info_tlf(){
	document.getElementById("e_telef").innerHTML = "El numero de telefono solo debe contener digitos y empezar por 6 o 9.";
}

