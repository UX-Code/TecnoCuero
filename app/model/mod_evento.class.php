<?php
class Modulo_Evento{
	function Guardar($even_nombre, $even_slogan, $even_fechainicio, $even_fechafin, $even_lugar, $even_coord_lat, $even_coord_lon, $teven_codigo, $even_registro_sofia, $even_precio){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO mod_evento (even_nombre, even_slogan, even_fechainicio, even_fechafin, even_lugar, even_coord_lat, even_coord_lon, teven_codigo, even_registro_sofia, even_precio) VALUES (?,?,?,?,?,?,?,?,?,?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($even_nombre, $even_slogan, $even_fechainicio, $even_fechafin, $even_lugar, $even_coord_lat, $even_coord_lon, $teven_codigo, $even_registro_sofia, $even_precio));
		ConexionBD::CerrarBD();
	}

	function ConsultarTodo(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_evento ORDER BY even_fechainicio ASC";
		$query = $pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchALL(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}

	function ConsultarporCodigo($even_codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_evento WHERE even_codigo = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($even_codigo));
		$result = $query->fetch(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}
	
	function Modificar($even_codigo, $even_nombre, $even_slogan, $even_fechainicio, $even_fechafin, $even_lugar, $even_coord_lat, $even_coord_lon, $teven_codigo, $even_registro_sofia, $even_precio){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE mod_evento SET even_nombre = ?, even_slogan = ?, even_fechainicio = ?, even_fechafin = ?, even_lugar = ?, even_coord_lat = ?, even_coord_lon = ?, teven_codigo = ?, even_registro_sofia = ?, even_precio = ? WHERE even_codigo = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($even_nombre, $even_slogan, $even_fechainicio, $even_fechafin, $even_lugar, $even_coord_lat, $even_coord_lon, $teven_codigo, $even_registro_sofia, $even_precio, $even_codigo));
		ConexionBD::CerrarBD();
	}

	function Eliminar($even_codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM mod_evento WHERE even_codigo = ?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($even_codigo));
		ConexionBD::CerrarBD();
	}
}
?> 
