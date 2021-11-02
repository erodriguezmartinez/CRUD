<!--Esperanza Rodríguez Martínez-->
<!--PÁGINA PRINCIPAL PARA ADMINISTRAR CRUD-->
<html>
	<head>
		<title>Administrar crud</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" "ISO-8859-1">
		<link href="EstiloGeneral.css" rel="stylesheet" type="text/css">
		<link href="EstiloIndex.css" rel="stylesheet" type="text/css">
	</head>
	<body>
			<?php 
				//Función para listar los empleados misrando su nombre y DNI
				function mostrar(){
					
					require 'Constantes.php';	//Incluimos Constantes.php donde tendrémos definidos los valores para la conexión
				
					$conexion  = new mysqli(SERVER,USUARIO,CONTRASENA,NOMBREBD);	//Conectamos con la bd
			
					$consulta = "SELECT * FROM Empleados";	//Consulta a ejecutar		
				
					$resultado = mysqli_query($conexion, $consulta);				
					
					while($fila = mysqli_fetch_assoc($resultado)){
						echo '<tr>';
							echo '<td>'.$fila["Nombre"].'</td>';
							echo '<td>'.$fila["DNI"].'</td>';
							echo '<td><a href="datosCrud.php?id='.$fila["IdEmpleados"].'&op=borrar&sw=1">Borrar</a></td>'; //Enlace de borrado
							echo '<td><a href="datosCrud.php?id='.$fila["IdEmpleados"].'&op=consultar">Consultar</a></td>';	//Enlace para consultar empleado
						echo '</tr>';
					};
					
				};
				
			?>
		<!--TÍTULO-->
		<header>Administrar</header>
		<!--MENÚ DE NAVEGACIÓN-->
		<nav>
			<a href="Administrar.php">Listado</a>
			<a href="Anadir.html">Añadir</a>
		</nav>
		<!--CUERPO DE LA PÁGINA-->
		<main>	
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
		</main>
		<footer>
			Panel de Administración
		</footer>
	</body>
</html>