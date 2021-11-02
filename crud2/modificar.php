<!--Esperanza Rodríguez Martínez-->
<!--PÁGINA PARA MODIFICAR EMPLEADO-->
<html>
	<head>
		<title>Administrar crud</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" "ISO-8859-1">
		<link href="estilogeneral.css" rel="stylesheet" type="text/css">
		<link href="estiloformulario.css" rel="stylesheet" type="text/css">
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
			<!--DATOS PERSONALES-->
		<?php 
			//Función para consultar un empleado en concreto
			function modificar($id){
				//Incluimos el archivo crud.php para utilizar las funciones definidas en el
				include('crud.php');
				$crud = new Crud();
				
				$fila=$crud->mostrar($_GET["id"]);		
				
				//Mostramos la información del empleado que se quiere modificar con los valores rellenados por defecto actuales
				echo'<main>
					<form action="datoscomprobar.php" method="post">	
						<fieldset>
						<input name="id" type="hidden" value="'.$id.'">	
						<label>Nombre completo y apellidos:</label><br />
						<input type="text" value="'.$fila["Nombre"].'" name="nombre_completo" placeholder="Nombre" maxlength="30"/>
						<br /><br />
						<label>DNI:</label><br />
						<input type="text" value="'.$fila["DNI"].'" name="DNI" placeholder="DNI" maxlength="9" />
						<br /><br />
						<label>Correo:</label><br />
						<input type="email" value="'.$fila["Correo"].'" name="correo" placeholder="ejemplo@gmail.com" /> 
						<br /><br />
						<label>Teléfono:</label><br />
						<input type="text" value="'.$fila["Telefono"].'" name="telefono" maxlength="9" >

						<div id="centrar">
							<input type="submit" name="enviar" id="solicitar" value="Modificar"> 	
						</div>
						</fieldset>
					</form>
				</main>
				<footer>
					Panel de Administración
				</footer>';
			}
		?>	
	</body>
</html>