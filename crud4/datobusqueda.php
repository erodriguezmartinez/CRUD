<?php
//Esperanza Rodríguez Martínez-->
//VALIDAMOS LOS DATOS DEL FORMULARIO DE BUSQUEDA--------------->

	//Incluimos el archivo crud.php para utilizar las funciones definidas en el
	include('crud.php');
	$crud = new Crud();
	
	switch ($_GET["bu"]) {
		case "DNI":	//DNI
			$crud->buscardni($_POST["DNI"]);	//Llamamos a la función de buscar por dni
			break;
		case "Nombre":	//Nombre
			$crud->buscarnombre($_POST["Nombre"]);	//Llamamos a la función de buscar por nombre
			break;
	}	
?>
