"use strict"
function validar() {
	var lugar=document.formu.lugar.value;
	var fecha_inicio=document.formu.fecha_inicio.value;
	var salario=document.formu.salario.value;
	var cliente = document.formu.cliente.selectedIndex;
	

	if ((!v1.test(lugar)) || (lugar=="")) {
		alert("El lugar es incorrecto o el campo esta vacio");
		document.formu.lugar.focus();
		return;
	}

	if (fecha_inicio == ""){
		alert("La fecha de inicio es incorrecta o el campo esta vacio");
		document.formu.fecha_inicio.focus();
		return;
	}

	if ((!v22.test(salario)) || (salario == "")) {
			alert("El salario es incorrecto o el campo esta vacio");
			document.formu.salario.focus();
			return;
	}

	if (cliente== ""){
		alert("El cliente no fue seleccionado");
		return;
	}

	alert("DATOS CORRECTOS");
}