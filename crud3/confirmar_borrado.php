<!--Esperanza Rodríguez Martínez-->
<!--PÁGINA PARA PREGUNTAR CONFIRMACIÓN DE BORRADO-->
<html>
	<head>
		<title>Administrar crud</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" "ISO-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="estilogeneral.css" rel="stylesheet" type="text/css">
		<link href="estilomostar.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--TÍTULO-->
		<header>Administrar</header>
		<!--TITULO-->
		<aside id="aside1">
			Confirmación de borrado de empleado
		</aside>
		<!--CUERPO DE LA PÁGINA-->
			<?php

				//Incluimos el archivo crud.php para utilizar las funciones definidas en el
				include('crud.php');
				$crud = new Crud();

				$fila=$crud->mostrar($_GET["id"]);

				//Mostramos la información del empleado
				echo'<main>
					<nav>
						<a href="index.php">Listado</a>
						<br /><br />
						<a href="anadir.html">Añadir</a>
					</nav>
					<aside id="aside2">
						<h2>¿Desea borrar al siguente empleado?</h2><br />
						<h3>Id Empleado</h3>
						<p>'.$fila["IdEmpleados"].'</p><br />
						<h3>Nombre</h3>
						<p>'.$fila["Nombre"].'</p><br />
						<h3>DNI</h3>
						<p>'.$fila["DNI"].'</p><br />
						<h3>Correo</h3>
						<p>'.$fila["Correo"].'</p><br />
						<h3>Teléfono</h3>
						<p>'.$fila["Telefono"].'</p><br />

						<td><a href="datoscrud.php?id='.$fila["IdEmpleados"].'&op=borrar&sw=2">Borrar</a></td>
					</aside>
				</main>
				<footer>
					Panel de Administración
				</footer>';

			?>
	</body>
</html>
