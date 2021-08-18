"use strict"
function validar(){
	var id_asesor = document.formu.id_asesor.value;
	var hora_entrada = document.formu.hora_entrada.value;
	var hora_salida = document.formu.hora_salida.value;
	var dias = document.formu.dias.value;

	if (id_asesor== ""){
		alert("El asesor no fue seleccionado");
		document.formu.id_asesor.focus();
		return;
	}

	if (hora_entrada== ""){
		alert("La hora de entrada es incorrecta o el campo esta vacio");
		document.formu.hora_entrada.focus();
		return;
	}

	if (hora_salida== ""){
		alert("La hora de salida es incorrecta o el campo esta vacio");
		document.formu.hora_salida.focus();
		return;
	}
	if ((!v1.test(dias)) || (dias == "")){
		alert("Los dias son incorrectos o el campo esta vacio");
		document.formu.dias.focus();
		return;
	}

	
		document.formu.submit();
	}