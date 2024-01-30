<?php 

	include "conexion.php";

	function tipoUsuario($nombre, $correo){
		global $conexion;

		$consulta = "SELECT Enabled FROM user WHERE FullName = ? AND Email =?";
		$sentencia = $conexion->prepare($consulta);
		$sentencia->bind_param("ss", $nombre,  $correo);
		$sentencia->execute();
		$sentencia->bind_result($enabled);
		$sentencia->fetch();
		$sentencia->close();

		if ($enabled == 1) {
			return "autorizado";
		} else {
			return "no autorizado";
		}
	}
	
	$nombreUsuario = 'Adam Smith';
	$correoUsuario = 'Adam@smith.com';
	$resultado = tipoUsuario($nombreUsuario, $correoUsuario);
	echo "Tipo de usuario: " . $resultado;

	function esSuperadmin($nombre, $correo){
		// Completar...
	}


	function getPermisos() {
		// Completar...	
	}


	function cambiarPermisos() {
		// Completar...	
	}


	function getCategorias() {
		// Completar...	
	}


	function getListaUsuarios() {
		// Completar...	
	}


	function getProducto($ID) {
		// Completar...	
	}


	function getProductos($orden) {
		// Completar...	
	}


	function anadirProducto($nombre, $coste, $precio, $categoria) {
		// Completar...	
	}


	function borrarProducto($id) {
		// Completar...	
	}


	function editarProducto($id, $nombre, $coste, $precio, $categoria) {
		// Completar...	
	}

?>