<!--Esperanza Rodríguez Martínez-->
<!----------------------------------------CRUD--------------------------------------------------->

<?php 
	
	class Crud{
		
		private $conexion;
		
		function __construct() {

			require 'Constantes.php';	//Incluimos Constantes.php donde tendrémos definidos los valores para la conexión
			
			$this->conexion  = new mysqli(SERVER,USUARIO,CONTRASENA,NOMBREBD);	//Conexión a bd
		}
		
		//Función para añadir empleado
		function anadir($nombre,$dni,$correo,$telefono){
			
			if($this->conexion === false){
				die("ERROR: Could not connect. " . $this->conexion->connect_error);	//Visualización de posible error
			}
 
			
			$consulta = "INSERT INTO Empleados (Nombre, DNI, Correo, Telefono) VALUES
				('$nombre', '$dni', '$correo', '$telefono')";				//Consulta a ejecutar				
				
			if($this->conexion->query($consulta) === true){
				 header("Location:Administrar.php"); //Redirigir a página de listado
				die();
			} else{
				echo "ERROR: Could not able to execute $consulta. " . $this->conexion->error;	//Visualización de posible error
			}	
		}
		
		//Función para borrar empleado
		function borrar($id){

			if($this->conexion === false){
				die("ERROR: Could not connect. " . $this->conexion->connect_error);	//Visualización de posible error
			}
			$consulta = "DELETE FROM Empleados WHERE IdEmpleados = '$id'";		//Consulta a ejecutar				
			
			if($this->conexion->query($consulta) === true){
				header("Location:Administrar.php");	//Redirigir a página de listado
				die();
			} else{
				echo "ERROR: Could not able to execute $consulta. " . $this->conexion->error;	//Visualización de posible error
			}	
	
		}
		
		//Función para modificar empleado
		function modificar($id,$nombre,$dni,$correo,$telefono){
			
			if($this->conexion === false){
				die("ERROR: Could not connect. " . $this->conexion->connect_error);	//Visualización de posible error
			}
 
			$consulta = "UPDATE Empleados SET Nombre='$nombre',DNI='$dni',Correo='$correo',Telefono='$telefono' WHERE IdEmpleados='$id'";	//Consulta a ejecutar						
				
			if($this->conexion->query($consulta) === true){
				 header("Location:Administrar.php"); //Redirigir a página de listado
				die();
			} else{
				echo "ERROR: Could not able to execute $consulta. " . $this->conexion->error;	//Visualización de posible error
			}	
			
		}
		
	}		
	
?>
