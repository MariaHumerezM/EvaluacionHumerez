"use strict"

function validar(){
	var ubicacion = document.formu.ubicacion.value;
	var tipo_inmueble = document.formu.tipo_inmueble.value;

	if (( !v1.test(ubicacion)) || (ubicacion == "")){
		alert("La ubicacion es incorrecta o el campo esta vacio");
		document.formu.ubicacion.focus();
		return;
	}

	if (tipo_inmueble == ""){
		alert("El tipo de inmueble es incorrecto o el campo esta vacio");
		document.formu.tipo_inmueble.focus();
		return;
	}
	

	alert("DATOS CORRECTOS:");
	
}