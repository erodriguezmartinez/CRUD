<!--Esperanza Rodríguez Martínez-->
<!----------------------------------------COMPROBAMOS LA ACCIÓN EJECUTADA--------------------------------------------------->

<?php 
		//Comprobamos el valor de op para saber a que función enviar el id
		switch ($_GET["op"]) {
			case "modificar":	//Modificar
				require 'modificar.php';
				modificar($_GET["id"]);		
				break;
			case "borrar":	//Borrar
				include('crud.php');
				$crud = new Crud();
				if($_GET["sw"]=="2"){	//Entrará por segunda vez confirmando la ejecución de borrar, validamos con sw
					$crud->borrar($_GET["id"]);
				}
				require 'confirmar_borrado.php';
				borrar($_GET["id"]);
				break;
			case "consultar":	//Consultar
				require 'consultar.php';
				consultar($_GET["id"]);
				break;
		}
?>