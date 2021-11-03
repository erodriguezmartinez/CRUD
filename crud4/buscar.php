<!--Esperanza Rodríguez Martínez-->
<!--PÁGINA PARA MODIFICAR EMPLEADO-->
<html>
	<head>
		<title>Administrar crud</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" "ISO-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="estilogeneral.css" rel="stylesheet" type="text/css">
		<link href="estilobuscar.css" rel="stylesheet" type="text/css">
		<link href="estiloindex.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--TÍTULO-->
		<header>Administrar</header>
      <?php
			
		$busqueda=$_GET["bu"];

		echo'<aside id="aside1">
		Buscar Empleado por '.$busqueda.'
		</aside>
          <main>
  					<nav>
  						<a href="index.php">Listado</a>
  						<br /><br />
  						<a href="anadir.html">Añadir</a><br /><br />
						  <a href="buscar.php?bu=DNI">Buscar por DNI</a><br /><br />
						  <a href="buscar.php?bu=Nombre">Buscar por Nombre</a>
  					</nav>
            <aside id="aside2">
            <form action="datobusqueda.php?bu='.$busqueda.'" method="post">	<!--Manda los datos a datosComprobar para validarlos-->
              <!--DATOS PERSONALES-->
              <label>'.$busqueda.' del empleado</label>
              <input type="text" name="'.$busqueda.'" placeholder="'.$busqueda.'" />
              <br /><br />
              <div id="centrar">
                <input type="submit" name="enviar" id="solicitar" value="Buscar">
              </div>
            </form>';
            function mostrar($resultado){

				echo'<div id="resultado">
					<table>
					<tr id="cabeceras">
						<th>Nombre</th>
						<th>DNI</th>
					</tr>';				
					while($fila= mysqli_fetch_assoc($resultado)){
						echo '<tr>
							<td>'.$fila["Nombre"].'</td>
							<td>'.$fila["DNI"].'</td>
							<td><a href="comprobar.php?id='.$fila["IdEmpleados"].'&op=borrar">Borrar</a></td>
							<td><a href="comprobar.php?id='.$fila["IdEmpleados"].'&op=consultar">Consultar</a></td>
						</tr>';
					};
				echo'</table>
				</aside>
				</main>
				<footer>
					Panel de Administración
				</footer>';
			}
  		?>
	</body>
</html>
