"use strict"

function validar(){
	var hora_entrada = document.formu.hora_entrada.value;
	var hora_salida = document.formu.hora_salida.value;
	var dias = document.formu.dias.value;
	var asesor = document.formu.asesor.selectedIndex;


	if ((!v22.test(hora_entrada)) || (hora_entrada== "")){
		alert("La hora de entrada es incorrecta o el campo esta vacio");
		document.formu.hora_entrada.focus();
		return;
	}

	if ((!v22.test(hora_salida)) || (hora_salida== "")){
		alert("La hora de salida es incorrecta o el campo esta vacio");
		document.formu.hora_salida.focus();
		return;
	}

	if ((!v1.test(dias)) || (dias == "")){
		alert("Los dias son incorrectos o el campo esta vacio");
		document.formu.dias.focus();
		return;
	}

	if (asesor== ""){
		alert("El asesor no fue seleccionado");
		return;
	}

	document.formu.submit();
}