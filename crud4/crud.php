<?php
	//<!--Esperanza Rodríguez Martínez-->
	//<!----------------------------------------CRUD--------------------------------------------------->
	//include_once 'administrar.php'; //Necesario para que funcione header

	class Crud{

		private $conexion;
		private $resultado;

		function __construct() {

			require 'constantes.php';	//Incluimos Constantes.php donde tendrémos definidos los valores para la conexión

			$this->conexion  = new mysqli(SERVER,USUARIO,CONTRASENA,NOMBREBD);	//Conexión a bd
		}


		//Función para añadir empleado
		function anadir($nombre,$dni,$correo,$telefono){

			if($this->conexion === false){
				die("ERROR: Could not connect. " . $this->conexion->connect_error);	//Visualización de posible error
			}

			$consulta = "INSERT INTO Empleados (Nombre, DNI, Correo, Telefono) VALUES
			('".$nombre."', '".$dni."', '".$correo."', '".$telefono."');";

			Crud::volver($consulta);
		}

		//Función para borrar empleado
		function borrar($id){

			if($this->conexion === false){
				die("ERROR: Could not connect. " . $this->conexion->connect_error);	//Visualización de posible error
			}
			$consulta = "DELETE FROM Empleados WHERE IdEmpleados = '".$id."';";		//Consulta a ejecutar

			Crud::volver($consulta);

		}

		//Función para modificar empleado
		function modificar($id,$nombre,$dni,$correo,$telefono){
			if($this->conexion === false){
				die("ERROR: Could not connect. " . $this->conexion->connect_error);	//Visualización de posible error
			}

			$consulta = "UPDATE Empleados SET Nombre='".$nombre."',DNI='".$dni."',Correo='".$correo."',Telefono='".$telefono."' WHERE IdEmpleados='".$id."';";	//Consulta a ejecutar

			$this->volver($consulta);

		}

		function listar(){

			$consulta = "SELECT * FROM Empleados";	//Consulta a ejecutar
			return $this->resultado = mysqli_query($this->conexion, $consulta);
		}

		function mostrar($id){

			$consulta = "SELECT * FROM Empleados WHERE IdEmpleados='".$id."';";		//Consulta a ejecutar
			$this->resultado = mysqli_query($this->conexion, $consulta);
			return $fila = mysqli_fetch_assoc($this->resultado);
		}

		function buscardni($dni){

			$consulta = "SELECT * FROM Empleados WHERE DNI LIKE '".$dni."%';";		//Consulta a ejecutar
			$this->resultado = mysqli_query($this->conexion, $consulta);
			require 'buscar.php';
			mostrar($this->resultado);
		}

		function buscarnombre($nombre){

			$consulta = "SELECT * FROM Empleados WHERE Nombre LIKE '".$nombre."%';";	//Consulta a ejecutar
			$this->resultado = mysqli_query($this->conexion, $consulta);
			require 'buscar.php';
			mostrar($this->resultado);
		}

		//Función para modificar empleado
		function volver($consulta){
			if($this->conexion->query($consulta) === true){
				require 'redirigir.php';
				redirigir();
			} else{
				echo "ERROR: Could not able to execute $consulta. " . $this->conexion->error;	//Visualización de posible error
			}
		}
	}
?>
