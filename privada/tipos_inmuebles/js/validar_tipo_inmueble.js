"use strict"
function validar(){
	var ubicacion = document.formu.ubicacion.value;
	var tipo_inmueble = document.formu.tipo_inmueble.value;
	
	if (ubicacion=="") {
		alert("Por favor ingrese la ubicacion");
		document.formu.ubicacion.focus();
		return;
	}

	if (tipo_inmueble=="") {
		alert("Por favor ingrese el tipo de inmueble");
		document.formu.tipo_inmueble.focus();
		return;
	}

	document.formu.submit();


}