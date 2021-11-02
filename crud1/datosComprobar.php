<!--Esperanza Rodríguez Martínez-->
<!--------VALIDAMOS LOS DATOS DEL FORMULARIO TANTO PARA AÑADIR COMO PARA MODIFICAR--------------->

<?php 
	
	//Validamos los datos introducidos
	if(empty($_POST["nombre_completo"]) || is_numeric($_POST["nombre_completo"]) 
		|| empty($_POST["DNI"]) || is_numeric($_POST["DNI"])
		|| empty($_POST["correo"]) || is_numeric($_POST["correo"])
		|| empty($_POST["telefono"]) || !is_numeric($_POST["telefono"])){
			
			if(empty($_POST["nombre_completo"]) || is_numeric($_POST["nombre_completo"])){
				echo "ERROR en la entrada del nombre. <br />";
			}
			if(empty($_POST["DNI"]) || is_numeric($_POST["DNI"])){
				echo "ERROR en la entrada del DNI. <br />";
			}
			if(empty($_POST["correo"]) || is_numeric($_POST["correo"])){
				echo "ERROR en la entrada del correo. <br />";
			}
			if(empty($_POST["telefono"]) || !is_numeric($_POST["telefono"])){
				echo "ERROR en la entrada del teléfono. <br />";
			}

	}else{
		
		//Incluimos el archivo crud.php para utilizar las funciones definidas en el
		include('crud.php');
		$crud = new Crud();
		
		//Comprobamos si se ha ejecutado el archivo para añadir o para modificar
		if($_POST["enviar"]=="Añadir"){
		
			$crud->anadir($_POST["nombre_completo"],$_POST["DNI"],$_POST["correo"],$_POST["telefono"]);	//Llamamos a la función de añadir
		}else{
		
			$crud->modificar($_POST["id"],$_POST["nombre_completo"],$_POST["DNI"],$_POST["correo"],$_POST["telefono"]);	//Llamamos a la función de modificar
		}


	}	

?>