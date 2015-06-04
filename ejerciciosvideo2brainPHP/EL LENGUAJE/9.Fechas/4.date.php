<?php

function damaTiempo(){

	switch (date("1")) {
		case 'Monday':
			$dia = "Lunes";
			break;

		case 'Tuesday':
			$dia = "Martes";
			break;

		case 'Wednesday':
			$dia = "Miercoles";
			break;

		case 'Thursday':
			$dia = "Jueves";
			break;

		case 'Friday':
			$dia = "Viernes";
			break;

		case 'Saturday':
			$dia = "Sabado"
			break;

		case 'Sunday':
			$dia = "Domingo";
			break;
		
	}
	echo "Hoy es ".date("l").", ".date("j")." de ".date("F")." de ".date("Y");
}

?>