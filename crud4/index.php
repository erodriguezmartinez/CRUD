<!--Esperanza Rodríguez Martínez-->
<!--PÁGINA PRINCIPAL PARA ADMINISTRAR CRUD-->
<html>
	<head>
		<title>Administrar crud</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" "ISO-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="estilogeneral.css" rel="stylesheet" type="text/css">
		<link href="estiloindex.css" rel="stylesheet" type="text/css">
	</head>
	<body>
			<?php
				//Función para listar los empleados misrando su nombre y DNI
				function mostrar(){

					//Incluimos el archivo crud.php para utilizar las funciones definidas en el
					include('crud.php');
					$crud = new Crud();

					$resultado=$crud->listar();

					while($fila = mysqli_fetch_assoc($resultado)){
						echo '<tr>
							<td>'.$fila["Nombre"].'</td>
							<td>'.$fila["DNI"].'</td>
							<td><a href="comprobar.php?id='.$fila["IdEmpleados"].'&op=borrar">Borrar</a></td>
							<td><a href="comprobar.php?id='.$fila["IdEmpleados"].'&op=consultar">Consultar</a></td>
						</tr>';
					};

				};

			?>
		<!--TÍTULO-->
		<header>Administrar</header>
		<!--MENÚ DE NAVEGACIÓN-->
		<aside id="aside1">
			Listado de empleados
		</aside>
		<!--CUERPO DE LA PÁGINA-->
		<main>
			<nav>
				<a href="index.php">Listado</a><br /><br />
				<a href="anadir.html">Añadir</a><br /><br />
				<a href="buscar.php?bu=DNI">Buscar por DNI</a><br /><br />
				<a href="buscar.php?bu=Nombre">Buscar por Nombre</a>
				
			</nav>
			<aside id="aside2">
				<!--TABLA-->
				<table>
					<tr id="cabeceras">
						<th>Nombre</th>
						<th>DNI</th>
					</tr>
					<?php
						mostrar();	//Llamamos a la función anteriormente definida
					?>
				</table>
			</aside>
		</main>
		<footer>
			Panel de Administración
		</footer>
	</body>
</html>
