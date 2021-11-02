<!--Esperanza Rodríguez Martínez-->
<!--PÁGINA PARA MODIFICAR EMPLEADO-->
<html>
	<head>
		<title>Administrar crud</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" "ISO-8859-1">
		<link href="EstiloGeneral.css" rel="stylesheet" type="text/css">
		<link href="EstiloFormulario.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--TÍTULO-->
		<header>Administrar</header>
		<hr />
		<!--MENÚ DE NAVEGACIÓN-->
		<nav>
			<a href="Administrar.php">Listado</a>
			<a href="Anadir.html">Añadir</a>
		</nav>
		<hr />
		<!--CUERPO DE LA PÁGINA-->
			<!--DATOS PERSONALES-->
		<?php 
			//Función para consultar un empleado en concreto
			function modificar($id){
				
				require 'Constantes.php';	//Incluimos Constantes.php donde tendrémos definidos los valores para la conexión
				
				$conexion  = new mysqli(SERVER,USUARIO,CONTRASENA,NOMBREBD);	//Conectamos con la bd
		
				$consulta = "SELECT * FROM Empleados WHERE IdEmpleados=$id";	//Consulta a ejecutar					
			
				$resultado = mysqli_query($conexion, $consulta);	
				
				$fila = mysqli_fetch_assoc($resultado);
				
				//Mostramos la información del empleado que se quiere modificar con los valores rellenados por defecto actuales
				echo"<main>";
					echo '<form action="datosComprobar.php" method="post">';	//Manda los datos a datosComprobar para validarlos
						echo '<fieldset>';
						echo '<input name="id" type="hidden" value="'.$id.'">';	//Mandamos el id mediante un input no visible
						echo '<label>Nombre completo y apellidos:</label><br />';
						echo '<input type="text" value="'.$fila["Nombre"].'" name="nombre_completo" placeholder="Nombre" maxlength="30"/>';
						echo '<br /><br />';
						echo '<label>DNI:</label><br />';
						echo '<input type="text" value="'.$fila["DNI"].'" name="DNI" placeholder="DNI" maxlength="9" />';
						echo '<br /><br />';
						echo '<label>Correo:</label><br />';
						echo '<input type="email" value="'.$fila["Correo"].'" name="correo" placeholder="ejemplo@gmail.com" /> ';
						echo '<br /><br />';
						echo '<label>Teléfono:</label><br />';
						echo '<input type="text" value="'.$fila["Telefono"].'" name="telefono" maxlength="9" >';

						echo '<div id="centrar">';
							echo '<input type="submit" name="enviar" id="solicitar" value="Modificar"> ';	//Value Modificar para modificar al empleado (validación en datosComprobar)
						echo '</div>';
						echo '</fieldset>';
					echo '</form>';
				echo"</main>";
			}
		?>	
	</body>
</html>