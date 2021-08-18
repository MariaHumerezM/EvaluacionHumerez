"use strict"

function validar(){
	var material = document.formu.material.value;
	var superficie = document.formu.superficie.value;
	var numero_dormitorios = document.formu.numero_dormitorios.value;
	var precio = document.formu.precio.value;
	var descripcion = document.formu.descripcion.selectedIndex;
	var inmueble = document.formu.inmueble.selectedIndex;
	var cliente = document.formu.cliente.selectedIndex;

	if ((!v1.test(material)) || (material == "")){
		alert("El material es incorrecto o el campo esta vacio");
		document.formu.material.focus();
		return;
	}

	if (superficie == ""){
		alert("La superficie es incorrecta o el campo esta vacio");
		document.formu.superficie.focus();
		return;
	}

	if ((!v2.test(numero_dormitorios)) || (numero_dormitorios == "")){
		alert("El numero de dormitorios es incorrecto o el campo esta vacio");
		document.formu.numero_dormitorios.focus();
		return;
	}

	if ((!v22.test(precio)) || (precio == "")){
		alert("El precio es incorrecto o el campo esta vacio");
		document.formu.precio.focus();
		return;
	}

	if (descripcion== ""){
		alert("La descripcion no fue seleccionada");
		return;
	}
	if (inmueble== ""){
		alert("El tipo de inmueble no fue seleccionado");
		return;
	}
	if (cliente== ""){
		alert("El cliente no fue seleccionado");
		return;
	}

	alert("DATOS CORRECTOS");
}