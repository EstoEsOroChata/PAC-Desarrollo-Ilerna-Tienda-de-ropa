<?php 

	function crearConexion() {
		// Cambiar en el caso en que se monte la base de datos en otro lugar
		$host = "localhost";
		$user = "root";
		$pass = "";
		$baseDatos = "pac3_daw";

		$conexion = new mysqli($host, $user, $pass, $baseDatos);

		if ($conexion->connect_error) {
			die("Error de conexión: " . $conexion->connect_error);
		}

		return $conexion;
	}


	function cerrarConexion($conexion) {
		$conexion->close();
	}


	function comprobarConexion() {
		try {
			// Intentar crear una conexión
			$conexion = crearConexion();
	
			// Si llegamos aquí, la conexión fue exitosa
	
			// Puedes realizar alguna operación sencilla, como seleccionar datos de una tabla
			$sql = "SELECT * FROM tu_tabla";
			$resultado = $conexion->query($sql);
	
			// Puedes verificar si la consulta fue exitosa
			if ($resultado) {
				echo "La conexión a la base de datos funciona correctamente.";
			} else {
				echo "Error al realizar la consulta: " . $conexion->error;
			}
	
			// Cerrar la conexión
			cerrarConexion($conexion);
	
		} catch (Exception $e) {
			// Capturar cualquier excepción que pueda ocurrir al intentar la conexión
			echo "Error de conexión: " . $e->getMessage();
		}
	}
	
	// Llamar a la función para comprobar la conexión
	comprobarConexion();

?>