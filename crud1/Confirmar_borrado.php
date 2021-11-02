<!--Esperanza Rodríguez Martínez-->
<!--PÁGINA PARA PREGUNTAR CONFIRMACIÓN DE BORRADO-->
<html>
	<head>
		<title>Administrar crud</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" "ISO-8859-1">
		<link href="EstiloGeneral.css" rel="stylesheet" type="text/css">
		<link href="EstiloMostar.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--TÍTULO-->
		<header>Administrar</header>
		<!--MENÚ DE NAVEGACIÓN-->
		<nav>
			<a href="Administrar.php">Listado</a>
			<a href="Anadir.html">Añadir</a>
		</nav>
		<!--CUERPO DE LA PÁGINA-->
			<?php 
				
				//Función para consultar un empleado en concreto
				function borrar($id){
					
					$conexion  = new mysqli(SERVER,USUARIO,CONTRASENA,NOMBREBD);	//Conectamos con la bd
			
					$consulta = "SELECT * FROM Empleados WHERE IdEmpleados=$id";		//Consulta a ejecutar						
				
					$resultado = mysqli_query($conexion, $consulta);	
					
					$fila = mysqli_fetch_assoc($resultado);
					
					//Mostramos la información del empleado
					echo"<main>";
						echo"<h2>¿Desea borrar al siguente empleado?</h2><br />";
						echo"<h3>Id Empleado</h3>";
						echo "<p>".$fila["IdEmpleados"]."</p><br />";
						echo"<h3>Nombre</h3>";
						echo "<p>".$fila["Nombre"]."</p><br />";
						echo"<h3>DNI</h3>";
						echo "<p>".$fila["DNI"]."</p><br />";
						echo"<h3>Correo</h3>";
						echo "<p>".$fila["Correo"]."</p><br />";
						echo"<h3>Teléfono</h3>";
						echo "<p>".$fila["Telefono"]."</p><br />";
	
						//Enlace conformar borrado del empleado anterior
						echo '<td><a href="datosCrud.php?id='.$fila["IdEmpleados"].'&op=borrar&sw=2">Borrar</a></td>';
						
					echo"</main>";
					echo"<footer>";
						echo"Panel de Administración";
					echo"</footer>";
				}
			?>		
	</body>
</html>