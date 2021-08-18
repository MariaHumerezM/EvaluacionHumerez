"use strict"

function validar(){
	var nombres = document.formu.nombres.value;
	var apellidos = document.formu.apellidos.value;
	var telefono = document.formu.telefono.value;
	var escala_laboral = document.formu.escala_laboral.value;
	var descripcion = document.formu.descripcion.value;	
	var asesor = document.formu.asesor.selectedIndex;


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

	if (telefono == ""){
		alert("El campo del telefono es incorrecto o esta vacio");
		document.formu.telefono.focus();
		return;
	}

	if (( !v22.test(escala_laboral)) || (escala_laboral == "")){
		alert("La escala laboral es incorrecta o el campo esta vacio");
		document.formu.escala_laboral.focus();
		return;
	}

	if (descripcion == ""){
		alert("La descripcion es incorrecta o el campo esta vacio");
		document.formu.descripcion.focus();
		return;
	}

	if (asesor== ""){
		alert("El asesor no fue seleccionado");
		return;
	}

	alert("DATOS CORRECTOS");
}