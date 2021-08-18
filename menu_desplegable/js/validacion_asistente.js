"use strict"

function validar(){
	var nombres = document.formu.nombres.value;
	var apellidos = document.formu.apellidos.value;
	var fecha_inicio = document.formu.fecha_inicio.value;
	var fecha_fin = document.formu.fecha_fin.value;
	var telefono = document.formu.telefono.value;
	var profesion = document.formu.profesion.value;


	if ((!v1.test(nombres)) || (nombres == "")){
		alert("Los nombres son incorrectos o el campo esta vacio");
		document.formu.nombres.focus();
		return;
	}

	if (( !v1.test(apellidos)) || (apellidos == "")){
		alert("Los apellidos son incorrectos o el campo esta vacio");
		document.formu.apellidos.focus();
		return;
	}

	if (fecha_inicio == ""){
		alert("El campo de la fecha de inicio es incorrecto o esta vacio");
		document.formu.fecha_inicio.focus();
		return;
	}

	if (fecha_fin == ""){
		alert("El campo de la fecha fin es incorrecto o esta vacio");
		document.formu.fecha_fin.focus();
		return;
	}

	if (telefono == ""){
		alert("El campo del telefono es incorrecto o esta vacio");
		document.formu.telefono.focus();
		return;
	}

	if (( !v1.test(profesion)) || (profesion == "")){
		alert("La profesion es incorrecta o el campo esta vacio");
		document.formu.profesion.focus();
		return;
	}


	document.formu.submit();
}