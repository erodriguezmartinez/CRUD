<?php 
	//Comprobamos el valor de op para saber a que función enviar el id
	switch ($_GET["op"]) {
		case "anadir":	//Añadir
			header("Location: anadir.html"); //Redirigir a página de Añadir 
			break;
		case "modificar":	//Modificar
			header('Location: modificar.php?id='.$_GET["id"].''); //Redirigir a página de Modificar 	
			break;
		case "borrar":	//Borrar
			header('Location: confirmar_borrado.php?id='.$_GET["id"].''); //Redirigir a página de Confirmación de borrado 	
			break;
		case "consultar":	//Consultar
			header('Location: consultar.php?id='.$_GET["id"].''); //Redirigir a página de Consultar
			break;
	}
?>
<!--Esperanza Rodríguez Martínez-->
<!----------------------------------------COMPROBAMOS LA ACCIÓN EJECUTADA--------------------------------------------------->
