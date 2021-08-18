"use strict"

function validar(){
	var horas = document.formu.horas.value;
	var contactos = document.formu.contactos.value;
	var asesor = document.formu.asesor.selectedIndex;
		

	if ((!v2.test(horas)) || (horas == "")) {
			alert("La cantidad de horas es incorrecta o el campo esta vacio");
			document.formu.horas.focus();
			return;
	}

	if ((!v2.test(contactos)) || (contactos == "")) {
			alert("La cantidad de contactos es incorrecta o el campo esta vacio");
			document.formu.contactos.focus();
			return;
	}

	if (asesor== ""){
		alert("El asesor no fue seleccionado");
		return;
	}

	alert("DATOS CORRECTOS:");
	
}