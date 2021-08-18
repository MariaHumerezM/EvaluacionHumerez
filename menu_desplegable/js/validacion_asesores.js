"use strict"

function validar(){
	var salario = document.formu.salario.value;
	var fecha_inicio = document.formu.fecha_inicio.value;
	var fecha_fin = document.formu.fecha_fin.value;
	var nombres = document.formu.nombres.value;
	var apellidos = document.formu.apellidos.value;
		

	if ((!v22.test(salario)) || (salario == "")) {
			alert("El salario es incorrecto o el campo esta vacio");
			document.formu.salario.focus();
			return;
	}

	if (fecha_inicio == ""){
		alert("La fecha de inicio es incorrecta o el campo esta vacio");
		document.formu.fecha_inicio.focus();
		return;
	}

	if (fecha_fin == ""){
		alert("La fecha fin es incorrecta o el campo esta vacio");
		document.formu.fecha_fin.focus();
		return;
	}	
	
	if (( !v1.test(nombres)) || (nombres == "")){
		alert("Los nombres son incorrectos o el campo esta vacio");
		document.formu.nombres.focus();
		return;
	}
	
	if ((!v1.test(apellidos)) || (apellidos == "")) {
			alert("Los apellidos son incorrectos o el campo esta vacio");
			document.formu.apellidos.focus();
			return;
	}
	
	document.formu.submit();
	
}