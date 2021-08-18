"use strict"
function validar(){
	
	var id_cliente = document.formu.id_cliente.value;
	var lugar=document.formu.lugar.value;
	var fecha_inicio=document.formu.fecha_inicio.value;
	var salario=document.formu.salario.value;

	if (id_cliente== ""){
		alert("El cliente no fue seleccionado");
		document.formu.id_cliente.focus();
		return;
	}

	if (lugar==""){
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

	document.formu.submit();
	}
