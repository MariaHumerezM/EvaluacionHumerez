"use strict"
function validar() {
	var nombre=document.formu.nombre.value;
	var direccion=document.formu.direccion.value;
	var telefono=document.formu.telefono.value;
	

	if ((!v1.test(nombre)) || (nombre=="")) {
		alert("El nombre es incorrecto o el campo esta vacio");
		document.formu.nombre.focus();
		return;
	}
	if (direccion=="") {
		alert("La direccion es incorrecta o el campo esta vacio");
		document.formu.direccion.focus();
		return;
	}
	if (telefono == ""){
		alert("El campo del telefono es incorrecto o esta vacio");
		document.formu.telefono.focus();
		return;
	}
	document.formu.submit();
}