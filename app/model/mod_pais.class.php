<?php
class Modulo_Pais{
	function Guardar($even_nombre, $even_slogan, $even_fechainicio, $even_fechafin, $even_lugar, $even_coord_lat, $even_coord_lon, $teven_codigo, $even_registro_sofia, $even_precio){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO mod_paises (pais_nombre) VALUES (?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($pais_nombre));
		ConexionBD::CerrarBD();
	}

	function ConsultarTodo(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_paises ORDER BY pais_nombre ASC";
		$query = $pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchALL(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}

	function ConsultarporCodigo($pais_codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_paises WHERE pais_codigo = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($pais_codigo));
		$result = $query->fetch(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}
	
	function Modificar($pais_codigo, $pais_nombre){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE mod_paises SET pais_nombre = ? WHERE pais_codigo = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($pais_codigo));
		ConexionBD::CerrarBD();
	}

	function Eliminar($pais_codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM mod_paises WHERE even_codigo = ?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($pais_codigo));
		ConexionBD::CerrarBD();
	}
}
?> 
