"use strict"
function validar(){
	
	var id_asistente_comercial = document.formu.id_asistente_comercial.value;
	var fecha_inicio=document.formu.fecha_inicio.value;
	var fecha_fin=document.formu.fecha_fin.value;
	var nombres=document.formu.nombres.value;
	var apellidos=document.formu.apellidos.value;
	var email=document.formu.email.value;
	var salario=document.formu.salario.value;

	if (id_asistente_comercial== ""){
		alert("El asistente comercial no fue seleccionado");
		document.formu.id_asistente_comercial.focus();
		return;
	}

	if (fecha_inicio == ""){
		alert("La fecha de inicio es incorrecta o el campo esta vacio");
		document.formu.fecha_inicio.focus();
		return;
	}
	if (fecha_fin==""){
		alert("La fecha fin es incorrecto o el campo esta vacio");
		document.formu.fecha_fin.focus();
		return;
	}
	if (nombres==""){
		alert("El nombre es incorrecto o el campo esta vacio");
		document.formu.nombres.focus();
		return;
	}
	if (apellidos == ""){
		alert("Los apellidos son incorrectos o el campo esta vacio");
		document.formu.apellidos.focus();
		return;
	}
	
	if (email==""){
		alert("El email es incorrecto o el campo esta vacio");
		document.formu.email.focus();
		return;
	}


	if ((!v22.test(salario)) || (salario == "")) {
			alert("El salario es incorrecto o el campo esta vacio");
			document.formu.salario.focus();
			return;
	}

	document.formu.submit();
	}
