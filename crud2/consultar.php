<!--Esperanza Rodríguez Martínez-->
<!--PÁGINA PARA CONSULTAR EMPLEADO-->
<html>
	<head>
		<title>Administrar crud</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" "ISO-8859-1">
		<link href="estilogeneral.css" rel="stylesheet" type="text/css">
		<link href="estilomostar.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--TÍTULO-->
		<header>Administrar</header>
		<!--MENÚ DE NAVEGACIÓN-->
		<nav>
			<a href="index.php">Listado</a>
			<a href="anadir.html">Añadir</a>
		</nav>
		<!--CUERPO DE LA PÁGINA-->
			<?php 
			
				//Incluimos el archivo crud.php para utilizar las funciones definidas en el
				include('crud.php');
				$crud = new Crud();
				
				$fila=$crud->mostrar($_GET["id"]);				
				
				//Mostramos la información del empleado
				echo'<main>
					<h3>Id Empleado</h3>
					<p>'.$fila["IdEmpleados"].'</p><br />
					<h3>Nombre</h3>
					<p>'.$fila["Nombre"].'</p><br />
					<h3>DNI</h3>
					<p>"'.$fila["DNI"].'</p><br />
					<h3>Correo</h3>
					<p>'.$fila["Correo"].'</p><br />
					<h3>Teléfono</h3>
					<p>'.$fila["Telefono"].'</p><br />
					
					<td><a href="datoscrud.php?id='.$fila["IdEmpleados"].'&op=modificar">Modificar</a></td>
				</main>
				<footer>
					Panel de Administración
				</footer>';
					
				
			?>	
	</body>
</html>